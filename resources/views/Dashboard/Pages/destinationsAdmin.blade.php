@extends('layouts.dashboardLayout')

@section('title', 'Destinations')

@section('content')

    <x-content-div heading="Manage Destinations">
        <x-card-element header="Add Destinations">
            <x-form-element method="POST" enctype="multipart/form-data" id="submitForm" action="javascript:">
                <x-input type="hidden" name="id" id="id" value=""></x-input>
                <x-input type="hidden" name="action" id="action" value="insert"></x-input>

                <x-input-with-label-element id="destination_name" label="Destination Name" placeholder="Destination Name"
                    name="destination_name" required></x-input-with-label-element>

                <x-input-with-label-element div_id="destination_image_div" id="destination_image" label="Destination Image"
                    type="file" accept="image/*" placeholder="Destination Image" name="destination_image[]"
                    required="true" multiple></x-input-with-label-element>

                <div class="col-md-4 col-sm-12 mb-3">
                    <label class="form-label" for="tour_type">
                        Select Tour Type
                        <span class="text-danger">*</span>
                    </label>

                    <!-- Trigger Input styled as select box -->
                    <div class="form-select" data-bs-toggle="modal" data-bs-target="#multiSelectModal"
                        style="cursor: pointer;">
                        <span id="selectedTourValues">Select options</span>
                    </div>

                    <!-- Hidden input to hold selected values -->
                    <input type="hidden" name="tour_id" id="tour_type">

                    <!-- Modal -->
                    <div class="modal fade" id="multiSelectModal" tabindex="-1" aria-labelledby="multiSelectModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="multiSelectModalLabel">Select Tour Type</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="multiSelectForm">
                                        @foreach ($tourTypes as $item)
                                            <div class="form-check col-6 mb-2">
                                                <input class="form-check-input" type="checkbox" value="{{ $item->id }}"
                                                    id="option_{{ $item->id }}" name="tour_id[]">
                                                <label class="form-check-label" for="option_{{ $item->id }}">
                                                    {{ $item->title }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary" onclick="applyMultiSelect()">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <x-text-area-with-label div_class="col-md-12 col-sm-12 mb-3" id="destination_details"
                    placeholder="Destination Details" label="Destination Details"
                    name="destination_details"></x-text-area-with-label>

                <x-input-with-label-element id="meta_keyword" label="Meta Keyword"
                    name="meta_keyword"></x-input-with-label-element>
                <x-input-with-label-element id="meta_title" label="Meta Title"
                    name="meta_title"></x-input-with-label-element>
                <x-input-with-label-element id="meta_description" label="Meta Description"
                    name="meta_description"></x-input-with-label-element>

                <x-input-with-label-element id="sorting_number" label="Sorting Number" type="numeric" minVal="1"
                    placeholder="Sorting Number" name="position" required="true"></x-input-with-label-element>





                <x-form-buttons></x-form-buttons>
            </x-form-element>

        </x-card-element>

        <x-card-element header="Destinations Data">
            <x-data-table></x-data-table>
        </x-card-element>
    </x-content-div>

@endsection

@section('script')

    <script type="text/javascript">
        const tourTypes = @json($tourTypes->map(fn($t) => ['id' => $t->id, 'title' => $t->title]));
        $('#destination_details').summernote({
            placeholder: 'Destination Details',
            tabsize: 2,
            height: 100
        });

        let site_url = '{{ url('/') }}';
        let table = "";
        $(function() {

            table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                "scrollX": true,
                ajax: {
                    url: "{{ route('DestinationsData') }}",
                    type: 'POST',
                    data: {
                        '_token': '{{ csrf_token() }}'
                    }
                },
                columns: [{
                        data: "DT_RowIndex",
                        orderable: false,
                        searchable: false,
                        title: "Sr.No."
                    },
                    {
                        data: '{{ \App\Models\DestinationsModel::ID }}',
                        name: '{{ \App\Models\DestinationsModel::ID }}',
                        title: 'Id',
                        visible: false
                    },
                    {
                        data: '{{ \App\Models\DestinationsModel::DESTINATION_NAME }}',
                        name: '{{ \App\Models\DestinationsModel::DESTINATION_NAME }}',
                        title: 'Destination Name'
                    },
                    {
                        data: '{{ \App\Models\DestinationsModel::DESTINATION_IMAGE }}',
                        render: function(data, type, row) {
                            let images = '';
                            if (data) {
                                // Directly return the HTML string without parsing it as JSON
                                images += data;
                            }
                            return images;
                        },
                        orderable: false,
                        searchable: false,
                        title: "Destination Image"
                    },
                    {
                        data: '{{ \App\Models\DestinationsModel::DESTINATION_DETAILS }}',
                        name: '{{ \App\Models\DestinationsModel::DESTINATION_DETAILS }}',
                        title: 'Destination Details'
                    },
                    {
                        data: '{{ \App\Models\DestinationsModel::TOUR_ID }}',
                        name: '{{ \App\Models\DestinationsModel::TOUR_ID }}',
                        title: 'Tour Types',
                        render: function(data, type, row) {
                            const htmlDecoded = data.replace(/&quot;/g, '"');

                            let ids = [];
                            try {
                                ids = JSON.parse(htmlDecoded);
                            } catch (e) {
                                console.warn('Invalid JSON in tour_id:', htmlDecoded);
                            }

                            // Map IDs to titles
                            const names = tourTypes
                                .filter(t => ids.includes(t.id.toString()))
                                .map(t => t.title);

                            return names.join(', ') || 'No Tour Types';
                        }
                    },
                    {
                        data: 'position',
                        name: 'position',
                        title: 'Destination Position'
                    },
                    {
                        data: 'meta_keyword',
                        name: 'meta_keyword',
                        title: 'Meta Keyword'
                    },
                    {
                        data: 'meta_title',
                        name: 'meta_title',
                        title: 'Meta Title'
                    },
                    {
                        data: 'meta_description',
                        name: 'meta_description',
                        title: 'Meta Description'
                    },


                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        title: 'Action'
                    },
                ],
                order: [
                    [1, "desc"]
                ]
            });

        });

        $(document).on("click", ".edit", function() {
            let row = $.parseJSON(atob($(this).data("row")));

            if (row['id']) {
                // Clear out previous image section (if any)
                $("#destination_image_old_div").remove();

                // Set form fields with existing data
                $("#id").val(row['id']);
                $("#destination_name").val(row['destination_name']);
                $("#sorting_number").val(row['position']);
                $("#destination_details").text(row['destination_details']);

                // Add current destination images HTML
                $("#destination_image_div").parent().append(`
            <div class="col-md-4 col-sm-12 mb-3" id="destination_image_old_div">
                <label class="form-label" for="destination_image_old">Current Destination Image</label>            
                <div>
                    ${renderImages(row['destination_image'])}
                </div>
            </div>
        `);
                $("#meta_keyword").val(row['meta_keyword']);
                $("#meta_title").val(row['meta_title']);
                $("#meta_description").val(row['meta_description']);
                // Reinitialize the Summernote editor with current text
                $('#destination_details').summernote('destroy');
                $("#destination_details").val(row['destination_details']);
                $('#destination_details').summernote({
                    focus: true
                });

                // Update action to 'update'
                $("#action").val("update");

                // Scroll to the form section if needed
                scrollToDiv();
            } else {
                errorMessage("Something went wrong. Code 101");
            }
        });

        function renderImages(images) {
            let html = '';
            if (images) {
                let imagePaths = JSON.parse(images); // Decoding JSON array of image paths
                imagePaths.forEach(image => {
                    html +=
                        `<img src="${site_url}/storage/${image}" class="img-thumbnail" style="width: 80px; margin-right: 5px;">`;
                });
            }
            return html;
        }


        $(document).ready(function() {
            $("#submitForm").on("submit", function() {
                var form = new FormData(this);
                // Append files from the file input to FormData (if any)
                var files = $("#destination_image")[0].files;
                if (files.length > 0) {
                    $.each(files, function(i, file) {
                        form.append("destination_image[]", file);
                    });
                }

                $.ajax({
                    type: 'POST',
                    url: '{{ route('saveDestinations') }}',
                    data: form,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status) {
                            successMessage(response.message, "reload");
                        } else {
                            errorMessage(response.message);
                        }
                    },
                    failure: function(response) {
                        errorMessage(response.message);
                    }
                });
            });
        });


        function applyMultiSelect() {
            const checkedBoxes = document.querySelectorAll('#multiSelectForm input[type=checkbox]:checked');
            const selectedValues = Array.from(checkedBoxes).map(cb => cb.value);
            const selectedLabels = Array.from(checkedBoxes).map(cb => cb.nextElementSibling.textContent.trim());

            document.getElementById('tour_type').value = selectedValues.join(',');
            // document.getElementById('selectedValues').textContent = selectedLabels.length ? selectedLabels.join(', ') :
            //     'Select options';
            document.getElementById('selectedTourValues').textContent =
                selectedLabels.length ? selectedLabels.join(', ') : 'Select options';


            // Move focus to outside element (like the fake select box)
            document.querySelector('.form-select')?.focus();

            // Then hide the modal
            const modalElement = document.getElementById('multiSelectModal');
            const modalInstance = bootstrap.Modal.getInstance(modalElement);
            if (modalInstance) {
                modalInstance.hide();
            }
        }

        
    </script>

    @include('Dashboard.include.dataTablesScript')

@endsection
