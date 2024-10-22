<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="content container-fluid ">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Add Subject</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">

                        <form action="#" class="needs-validation" novalidate>
                            <div class="row d-flex">
                                <div class="col-12 d-flex">
                                    <h5 class="form-title sub-info">Subject Information</h5>

                                </div>
                                <div class="col-12 mt-3 col-sm-6">
                                    <div class="from-group local-forms">
                                        <label for="invalidCheck">
                                            Course Name
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input class="form-control p-2" type="text" placeholder="Enter Course Name"
                                            id="invalidCheck" required>
                                        <div class="invalid-feedback">Please enter valid name.</div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3 col-sm-6">
                                    <div class="from-group local-forms">
                                        <label for="invalidCheck">
                                            Course Tag
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input class="form-control p-2" type="text" placeholder="Enter Course Tag"
                                            id="invalidCheck" required>
                                        <!-- <button style="border-radius:5px;"> <i class="fa-light fa-plus"></i></button> -->
                                        <div class="invalid-feedback">Please enter valid Tag.</div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3 col-sm-12">
                                    <div class="from-group local-forms">
                                        <label for="invalidCheck">
                                            Course Description
                                            <span class="text-danger">*</span>
                                        </label>
                                        <textarea class="form-control mt-3 col-12" rows="4" cols="50" name="comment"
                                            form="usrform" id="invalidCheck" required>
                                    </textarea>
                                        <!-- <label for="validationCustomUsername" class="form-label">Username</label> -->
                                        <div class="invalid-feedback">Please enter valid Description.</div>
                                    </div>
                                </div>

                                <div class="col-12 mt-3 col-sm-12">
                                    <div class="from-group local-forms">
                                        <label for="invalidCheck">
                                            Curriculum
                                            <span class="text-danger">*</span>
                                        </label>
                                        <textarea class="form-control" rows="4" cols="50" name="comment" form="usrform"
                                            id="invalidCheck" required>
                                        </textarea>
                                        <div class="invalid-feedback">Please enter valid Curriculum.</div>
                                    </div>
                                </div>



                                <div class="col-12 mt-4 col-sm-3">
                                    <div class="from-group local-forms">
                                        <label for="validationCustom04" class="form-label">State</label>
                                        <select class="form-select" id="validationCustom04" required>
                                            <option selected disabled value="">Choose...</option>
                                            <option value="">1 Month</option>
                                            <option value="">2 Month</option>
                                            <option value="">3 Month</option>
                                            <option value="">5 Month</option>
                                            <option value="">6 Month</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid state.
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 mt-4 col-sm-3">
                                    <div class="from-group local-forms">
                                        <label for="validationCustom04" class="form-label">Course Level <span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" id="validationCustom04" required>
                                            <option selected disabled value="">Choose...</option>
                                            <option value="">Easy</option>
                                            <option value="">Medium</option>
                                            <option value="">Hard</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid Level.
                                        </div>


                                    </div>
                                </div>
                                <div class="col-12 mt-4 col-sm-3">
                                    <div class="from-group local-forms">

                                        <label for="validationCustom04" class="form-label">Course Type<span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" id="validationCustom04" required>
                                            <option selected disabled value="">Choose...</option>
                                            <option value="">Online</option>
                                            <option value="">Offline</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid Type.
                                        </div>


                                    </div>
                                </div>

                                <div class="col-12 mt-4 col-sm-3">
                                    <div class="from-group local-forms">
                                        <label for="invalidCheck">
                                            Course Price
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input class="form-control p-2" type="text" placeholder="Enter Course Price"
                                            id="invalidCheck" required />
                                        <div class="invalid-feedback">Please enter valid Price.</div>
                                    </div>
                                </div>

                                <div class="col-12 mt-3 col-sm-12">
                                    <div class="form-group">
                                        <label> Upload Course Banner <span class="text-danger">*</span></label>
                                        <div class="uplode">
                                            <label for="invalidCheck" class="file-upload image-upbtn mb-0">
                                                Choose File:-
                                                <input type="file" onchange="readURL(this);" id="invalidCheck"
                                                    required />
                                            </label>
                                            <img id="blah" src="http://placehold.it/180" alt="your image" />
                                            <div class="invalid-feedback">You must agree before submitting.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-3 col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                            required />
                                        <label class="form-check-label" for="invalidCheck">Agree to terms and conditions
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="invalid-feedback">You must agree before submitting.</div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <button class="btn btn-warning" type="submit">Add Subject</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        (() => {
            'use strict';

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation');

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms).forEach((form) => {
                form.addEventListener('submit', (event) => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');

                }, false);
            });


        })();


        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>

</html>