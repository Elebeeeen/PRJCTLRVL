@extends('layouts.app')

@section('content')
<style>
    .header {
        background-color: #00B0F0;
        color: white;
        display: flex;
        justify-content: center;
        width: 100%;
        height: 45px;
        padding: 5px;
    }

    #requiredStyle {
        color: #F72C00
    }

    .form-label {
        padding-top: 10px;
    }

    .border {
        width: 99%;
        height: 200px;
        border: 5px;
        padding: 10px;
        border-radius: 5px;
        margin-left: 5px;
        display: flex;
    }


    .forCheckbox {
        display: flex;
        justify-content: center;
    }

    .divider {
        padding-left: 100px;
    }
</style>

<form action="/leaveform" id="submitForm" method="POST">
    @CSRF

    <div class="card">

        <!-- header -->
        <div class="header">
            <h3> Leave Form </h3>
        </div>

        <!-- first row -->
        <div class="row">
            <div class="form-group col-3">
                <label for="requested_by" class="form-label">Office</label>
                <span id="requiredStyle"> *</span>
                <input type="text" class="form-control" placeholder="Ex: CMIO" id="office" name="office">

            </div>

            <div class="form-group col-4">
                <label for="requested_by" class="form-label">Last Name</label>
                <span id="requiredStyle"> *</span>
                <input type="text" class="form-control" placeholder="Ex: Dela Cruz" id="last_name" name="last_name">
            </div>

            <div class="form-group col-4">
                <label for="requested_by" class="form-label">First Name</label>
                <span id="requiredStyle"> *</span>
                <input type="text" class="form-control" placeholder="Ex: Juan" id="first_name" name="first_name">
            </div>

            <div class="form-group col-1">
                <label for="requested_by" class="form-label">M.I.</label>
                <span id="requiredStyle"> *</span>
                <input type="text" class="form-control" placeholder="Ex: M" id="middle_initial" name="middle_initial">
            </div>
        </div>

        <!-- second row -->
        <div class="row">
            <div class="form-group col-4">
                <label for="requested_by" class="form-label">Employee Number</label>
                <span id="requiredStyle"> *</span>
                <input type="text" class="form-control" placeholder="Ex: 1001" id="employee_number" name="employee_number">
            </div>

            <div class="form-group col-4">
                <label for="requested_by" class="form-label">Position</label>
                <span id="requiredStyle"> *</span>
                <input type="text" class="form-control" placeholder="Ex: Employee" id="position" name="position">
            </div>

            <div class="form-group col-4">
                <label for="requested_by" class="form-label">Salary</label>
                <span id="requiredStyle"> *</span>
                <input type="text" class="form-control" placeholder="Ex: ₱10,000" id="salary" name="salary">
            </div>
        </div>

        <!-- third row -->
        <div class="row">
            <div class="form-group col-12">
                <label for="requested_by" class="form-label">E-mail</label>
                <span id="requiredStyle"> *</span>
                <input type="text" class="form-control" placeholder="Ex: juandelacruz@gmail.com" id="email" name="email">
            </div>
        </div>

        <!-- fourth row -->
        <div class="row">
            <div class="form-group col-3">
                <label for="requested_by" class="form-label">Type of Leave</label>
                <span id="requiredStyle"> *</span>
                <select class="select2 form-control" name="type_of_leave" id="type_of_leave">
                    <option disabled selected value> -- select an option -- </option>
                    <option value="Vacation Leave (Sec. 51, Rule XVI, Omnibus Rules Implementation E.O No. 292)">Vacation Leave (Sec. 51, Rule XVI, Omnibus Rules Implementation E.O No. 292)</option>
                    <option value="Mandatory/Forced Leave (Sec. 25, Rule XVI, Omnibus Rules Implementation E.O No. 292)">Mandatory/Forced Leave (Sec. 25, Rule XVI, Omnibus Rules Implementation E.O No. 292)</option>
                    <option value="Sick Leave (Sec. 43, Rule XVI, Omnibus Rules Implementation E.O No. 292)">Sick Leave (Sec. 43, Rule XVI, Omnibus Rules Implementation E.O No. 292)</option>
                    <option value="Maternity Leave (R.A No.11210/IRR issuedby CSC, DOLE, and SSS)">Maternity Leave (R.A No.11210/IRR issuedby CSC, DOLE, and SSS)</option>
                    <option value="Paternity Leave (R.A. No.8187/ CSC MC No. 71, S. 1998, as amended)">Paternity Leave (R.A. No.8187/ CSC MC No. 71, S. 1998, as amended)</option>
                    <option value="Special Privelage Leave (Sec. 21, Rule XVI, Omnibus Rules Implementation E.O No. 292)">Special Privelage Leave (Sec. 21, Rule XVI, Omnibus Rules Implementation E.O No. 292)</option>
                    <option value="Solo Parent Leave (RA No. 8972/CSC MC No. 8, s. 2004)">Solo Parent Leave (RA No. 8972/CSC MC No. 8, s. 2004)</option>
                    <option value="Study Leave (Sec. 68, Rule XVI, Omnibus Rules Implementation E.O No. 292)">Study Leave (Sec. 68, Rule XVI, Omnibus Rules Implementation E.O No. 292)</option>
                    <option value="10-Day VAWC Leave (RA No. 9262/CSC MC No.15, s. 2005)">10-Day VAWC Leave (RA No. 9262/CSC MC No.15, s. 2005)</option>
                    <option value="Rehabilitation Privilage (Sec. 55, Rule XVI, Omnibus Rules Implementation E.O No. 292)">Rehabilitation Privilage (Sec. 55, Rule XVI, Omnibus Rules Implementation E.O No. 292)</option>
                    <option value="Special Leave Benefits for Women (RA. No. 9710/ CSC MC No. 25, s. 2010)">Special Leave Benefits for Women (RA. No. 9710/ CSC MC No. 25, s. 2010)</option>
                    <option value="Special Emergency (Calamity) Leave (CSC MC No. 2, s. 2012, as amended)">Special Emergency (Calamity) Leave (CSC MC No. 2, s. 2012, as amended)</option>
                    <option value="Adoption Leave (R.A No. 8552)">Adoption Leave (R.A No. 8552)</option>
                    <option value="Others">Others</option>
                </select>
            </div>


            <div class="form-group col-3">
                <label for="requested_by" class="form-label">Date</label>
                <span id="requiredStyle"> *</span>
                <input type="date" class="form-control" id="date" name="date">
            </div>

            <div class="form-group col-3">
                <label for="requested_by" class="form-label">No. Of Working Days</label>
                <span id="requiredStyle"> *</span>
                <input type="text" class="form-control" placeholder="Ex: (1) One day" id="num_working_days" name="num_working_days">
            </div>

            <div class="form-group col-3">
                <label for="requested_by" class="form-label">Inclusive Dates</label>
                <span id="requiredStyle"> *</span>
                <input type="text" class="form-control" placeholder="Ex: April 26,2023" id="inclusive_dates" name="inclusive_dates">
            </div>
        </div>



        <!-- fifth row (pop-up) -->
        <div class="row">
            <div class="form-group col-3">
                <label for="requested_by" class="form-label titleBox">Additional Info</label>
            </div>
            <div class="border leaveOption"></div>
        </div>
        <br>

        <!-- Sixth row-->
        <div class="row">
            <div class="border">

                <div class="form-group col-6">
                    <label for="requested_by" class="form-label">Commutation</label>
                    <span id="requiredStyle"> *</span>

                    <div class="forCheckbox">
                        <input type="radio" id="radio11" name="commutation" value="Requested">
                        <label for="requested_by" class="form-label"> Requested</label>

                        <div class="divider">
                            <input type="radio" id="radio12" name="commutation" value="Not Requested">
                            <label for="requested_by" class="form-label">Not Requested</label>
                        </div>
                    </div>
                </div>

                <div class="form-group col-6">
                    <label for="requested_by" class="form-label">Approver</label>
                    <span id="requiredStyle"> *</span>
                    <input type="text" class="form-control" placeholder="Ex: Approver" id="approver" name="approver">
                </div>
            </div>
        </div>

        <br>

        <!--button-->
        <div class="w-100">
            <div class="float-right">
                <button type="submit" id="submitApp" class="btn btn-primary">Submit</button>
            </div>
        </div>


    </div>

</form>


<script>
    $('#type_of_leave').change(function() {
        var leave = $('#type_of_leave').val();
        switch (leave) {
            case "Vacation Leave (Sec. 51, Rule XVI, Omnibus Rules Implementation E.O No. 292)":
                document.getElementById('same1')?.remove();
                document.getElementById('same2')?.remove();
                document.getElementById('same3')?.remove();
                $('.leaveOption').append('<div class="form-group col-12" id="same1"> <input type="radio" id="radio1" name="details" value="Within the Philippines"> <label for="requested_by" class="form-label">Within the Philippines</label> <div class="form-group " id="same2"> <input type="radio" id="radio2" name="details" value="Within Abroad"> <label for="requested_by" class="form-label">Within Abroad</label></div> <input type="text" placeholder="Specify" class="form-control" id="specification" name="specification"></div>');
                $('.leaveOption').append();
                $('.select2').select2({});
                break;

            case "Mandatory/Forced Leave (Sec. 25, Rule XVI, Omnibus Rules Implementation E.O No. 292)":
                document.getElementById('same1')?.remove();
                document.getElementById('same2')?.remove();
                document.getElementById('same3')?.remove();
                break;

            case "Sick Leave (Sec. 43, Rule XVI, Omnibus Rules Implementation E.O No. 292)":
                document.getElementById('same1')?.remove();
                document.getElementById('same2')?.remove();
                document.getElementById('same3')?.remove();
                $('.leaveOption').append('<div class="form-group col-4" id="same1"> <input type="radio" id="radio3" name="details" value="In Hospital"> <label for="requested_by" class="form-label">In Hospital</label> <input type="text" placeholder="Illness (Specify)" class="form-control" id="specification" name="specification"></div>');
                $('.leaveOption').append('<div class="form-group col-4" id="same2"> <input type="radio" id="radio4" name="details" value="Out Patient"> <label for="requested_by" class="form-label">Out Patient</label></div>');
                $('.leaveOption').append('<div class="form-group col-4" id="same3"> <input type="radio" id="radio5" name="details" value="In case Leave Benefits for Women"> <label for="requested_by" class="form-label">In case Leave Benefits for Women</label></div>');
                $('.select2').select2({});
                break;

            case "Maternity Leave (R.A No.11210/IRR issuedby CSC, DOLE, and SSS)":
                document.getElementById('same1')?.remove();
                document.getElementById('same2')?.remove();
                document.getElementById('same3')?.remove();
                break;

            case "Paternity Leave (R.A. No.8187/ CSC MC No. 71, S. 1998, as amended)":
                document.getElementById('same1')?.remove();
                document.getElementById('same2')?.remove();
                document.getElementById('same3')?.remove();
                break;

            case "Special Privelage Leave (Sec. 21, Rule XVI, Omnibus Rules Implementation E.O No. 292)":
                document.getElementById('same1')?.remove();
                document.getElementById('same2')?.remove();
                document.getElementById('same3')?.remove();
                break;

            case "Solo Parent Leave (RA No. 8972/CSC MC No. 8, s. 2004)":
                document.getElementById('same1')?.remove();
                document.getElementById('same2')?.remove();
                document.getElementById('same3')?.remove();
                break;

            case "Study Leave (Sec. 68, Rule XVI, Omnibus Rules Implementation E.O No. 292)":
                document.getElementById('same1')?.remove();
                document.getElementById('same2')?.remove();
                document.getElementById('same3')?.remove();
                $('.leaveOption').append('<div class="form-group col-4" id="same1"> <input type="radio" id="radio6" name="details"> <label for="requested_by" class="form-label">Completion of Masters Degree </label></div>');
                $('.leaveOption').append('<div class="form-group col-4" id="same2"> <input type="radio" id="radio7" name="details"> <label for="requested_by" class="form-label">BAR/Board Examination Review</label></div>');
                $('.select2').select2({});
                break;

            case "10-Day VAWC Leave (RA No. 9262/CSC MC No.15, s. 2005)":
                document.getElementById('same1')?.remove();
                document.getElementById('same2')?.remove();
                document.getElementById('same3')?.remove();
                break;

            case "Rehabilitation Privilage (Sec. 55, Rule XVI, Omnibus Rules Implementation E.O No. 292)":
                document.getElementById('same1')?.remove();
                document.getElementById('same2')?.remove();
                document.getElementById('same3')?.remove();
                break;

            case "Special Leave Benefits for Women (RA. No. 9710/ CSC MC No. 25, s. 2010)":
                document.getElementById('same1')?.remove();
                document.getElementById('same2')?.remove();
                document.getElementById('same3')?.remove();
                break;

            case "Special Emergency (Calamity) Leave (CSC MC No. 2, s. 2012, as amended)":
                document.getElementById('same1')?.remove();
                document.getElementById('same2')?.remove();
                document.getElementById('same3')?.remove();
                break;

            case "Adoption Leave (R.A No. 8552)":
                document.getElementById('same1')?.remove();
                document.getElementById('same2')?.remove();
                document.getElementById('same3')?.remove();
                break;

            case "Others":
                document.getElementById('same1')?.remove();
                document.getElementById('same2')?.remove();
                document.getElementById('same3')?.remove();
                $('.leaveOption').append('<div class="form-group col-4" id="same1"> <input type="radio" id="radio8" name="details"> <label for="requested_by" class="form-label">Monetization of Leave Credits </label></div>');
                $('.leaveOption').append('<div class="form-group col-4" id="same2"> <input type="radio" id="radio9" name="details"> <label for="requested_by" class="form-label">Terminal Leave</label></div>');
                $('.select2').select2({});
                break;
        }
    });

    //select2
    $(document).ready(function() {
        $('.select2').select2();
    });


    //sweet alert for submit
    let errorMessages = '';
    $("#submitForm").on("submit", function(e) {
        e.preventDefault();
        let formData = new FormData($('#submitForm')[0]);
        Swal.fire({
            title: "Are you sure?",
            text: 'You want to submit this application?',
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Confirm",
            cancelButtonText: "Cancel"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "/leaveform",
                    method: "POST",
                    processData: false,
                    contentType: false,
                    cache: false,
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                title: 'Success!',
                                text: 'You can now view and print your leave form. Wait to notify in your email to be approved.',
                                icon: 'success',
                                confirmButtonText: 'Okay'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "/leaveform/";
                                }
                            })
                        } else {
                            for (let i = 0; i < response.errors.length; i++) {
                                errorMessages += "-" + response.errors[i] + "\n";
                            }
                            Swal.fire({
                                html: '<pre>' + errorMessages + '</pre>',
                                customClass: {
                                    popup: 'format-pre'
                                },
                                title: 'Error!',
                                icon: 'error',
                                confirmButtonText: 'Okay'
                            })
                            errorMessages = "";
                        }
                    }
                });
            }
        });
    });
</script>
@endsection