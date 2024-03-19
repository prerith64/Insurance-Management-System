<?php require_once '../header.php'; ?>

<div class="container mt-5">
    <h1 class="mb-4">Add New Policy Holder</h1>
    <div class="row">
        <div class="col-md-6">
            <h2>Holder's Details:</h2>
            <form action="../includes/AddNewPolicyHolder-inc.php" method="post">
                <div class="form-group">
                    <input type="text" name="Name" class="form-control" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="Email_id" class="form-control" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <input type="number" name="Mobile_no" class="form-control" placeholder="Mobile Number" min="5000000000" max="9999999999" required>
                </div>
                <div class="form-group">
                    <label for="DOB">Date of Birth:</label>
                    <input type="date" name="DOB" class="form-control" required>
                </div>

                <h2> Address: </h2>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="text" name="House_no" class="form-control" placeholder="House Number">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" name="Colony" class="form-control" placeholder="Colony">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" name="City" class="form-control" placeholder="City">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="number" name="Pincode" class="form-control" placeholder="Pincode">
                    </div>
                </div>

                <h2>Nominee:</h2>
                <div class="form-group">
                    <input type="text" name="Nominee_name" class="form-control" placeholder="Nominee Name" required>
                </div>
                <div class="form-group">
                    <select name="Nominee_relation" class="form-control" required>
                        <option value="" selected disabled>Nominee Relation</option>
                        <option value="Parent">Parent</option>
                        <option value="Child">Child</option>
                        <option value="Spouse">Spouse</option>
                        <option value="Grand child">Grand Child</option>
                        <option value="Relative">Relative</option>
                        <option value="Friend">Friend</option>
                    </select>
                </div>

                <h2>Personal Details:</h2>
                <div class="form-group">
                    <select name="Gender" class="form-control" required>
                        <option value="" selected disabled>Select gender</option>
                        <option value="MALE">Male</option>
                        <option value="FEMALE">Female</option>
                        <option value="OTHER">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" name="Occupation" class="form-control" placeholder="Occupation">
                </div>
                <div class="form-group">
                    <input type="text" name="Edu_ql" class="form-control" placeholder="Education Qualification">
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Add Policy Holder</button>
            </form>
        </div>
    </div>
</div>

<?php require_once '../footer.php'; ?>
