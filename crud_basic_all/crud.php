<style>
    .my-whole-section {
        padding: 20px 20px;
        height: 100%;
    }

    .form::-webkit-scrollbar {
        width: 0px;
    }

    .form::-webkit-scrollbar-thumb {
        background: #666;
        border-radius: 20px;
    }

    .form::-webkit-scrollbar-track {
        background: #ddd;
        border-radius: 20px;
    }

    body {
        background: none !important;
    }

    .form {
        max-width: 100%;
        margin: auto auto 10px auto;
        padding: 20px 0 0 0;
        /* padding: 60px 30px; */
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        column-gap: 20px;
        row-gap: 25px;
        text-align: center;
        font-family: sans-serif;
        overflow-y: auto;
        max-height: 50%;
    }

    span {
        position: relative;
        display: inline-block;

    }


    .balloon {

        display: inline-block;
        width: 100%;
        padding: 9px 0 9px 15px;
        font-family: "Open Sans", sans;
        font-weight: 400;
        color: grey;
        background: #fff;
        border: 0;
        border-radius: 10px;
        outline: 0;
        text-indent: 0;
        transition: all 0.3s ease-in-out;
        border: 1px solid grey;

        &::-webkit-input-placeholder {
            color: #fff;
            text-indent: 0;
            font-weight: 300;
        }

        +label {
            display: inline-block;
            position: absolute;
            top: -19px;
            left: 5px;
            z-index: 1;
            padding: 5px 15px;
            color: #fff;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            text-shadow: 0 1px 0 rgba(19, 74, 70, 0);
            transition: all 0.3s ease-in-out;
            border-radius: 3px;
            background: rgb(112, 123, 128);

            &:after {
                position: absolute;
                content: "";
                width: 0;
                height: 0;
                top: 100%;
                left: 50%;
                margin-left: -3px;
                border-left: 3px solid transparent;
                border-right: 3px solid transparent;
                border-top: 3px solid rgba(122, 184, 147, 0);
                transition: all 0.3s ease-in-out;
            }
        }
    }

    .balloon:focus,
    .balloon:active {
        color: black;
        text-indent: 0;
        background: #fff;
        font-size: 14px;

        &::-webkit-input-placeholder {
            color: #aaa;
        }

        +label {
            color: #fff;
            text-shadow: 0 1px 0 rgba(19, 74, 70, .4);
            /* background: rgba(122, 184, 147, 1); */
            background: #34495E;
            transform: translateY(-5px);

            &:after {
                border-top: 4px solid rgba(122, 184, 147, 1);
            }
        }
    }

    .button {
        text-decoration: none;
        color: #fff;
        background: tomato;
        padding: 10px 30px;
        border-radius: 4px;
        font-weight: bold;
        text-transform: uppercase;
        transition: all 0.2s ease-in-out;
        border: none;
        cursor: pointer;

    }

    .button:hover {
        color: rgba(255, 255, 255, 1);
        box-shadow: 0 5px 15px rgba(145, 92, 182, .4);
    }

    .my-button {
        width: 100%;
        display: flex;
        justify-content: space-between;
        padding: 5px 0;
    }

    .my-button>img {
        height: 40px;
        width: 80px;
    }

    .phone-number {
        background-color: #0066b2;
        /* background-color: #4CAF50; */
        color: white;
        padding: 8px 15px;
        border-radius: 20px;
        font-size: 18px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        display: inline-block;
        transition: background-color 0.3s;

        display: inline-block;
        font-size: 20px;
        font-weight: bold;
        transform: translateX(100%);
        opacity: 0;
        transition: transform 1s cubic-bezier(0.25, 1, 0.5, 1),
            opacity 1s ease-out, color 1s ease-out;
    }

    .phone-number.visible {
        transform: translateX(0);
        opacity: 1;
        /* color: #007bff;  */
    }

    @keyframes slideIn {
        0% {
            transform: translateX(100%);
            opacity: 0;
        }

        50% {
            transform: translateX(-10%);
            opacity: 0.5;
        }

        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .phone-number:hover {
        background-color: #002D62;
        /* Darker green on hover */
    }

    .did-number {
        background-color: #318CE7;
        color: white;
        padding: 8px 15px;
        border-radius: 20px;
        font-size: 18px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        display: inline-block;
        transition: background-color 0.3s;

        display: inline-block;
        font-size: 20px;
        font-weight: bold;
        transform: translateX(100%);
        opacity: 0;
        transition: transform 1s cubic-bezier(0.25, 1, 0.5, 1),
            opacity 1s ease-out, color 1s ease-out;
    }

    .did-number.visible {
        transform: translateX(0);
        opacity: 1;
        /* color: #007bff;  */
    }

    @keyframes slideIn {
        0% {
            transform: translateX(100%);
            opacity: 0;
        }

        50% {
            transform: translateX(-10%);
            opacity: 0.5;
        }

        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .did-number:hover {
        background-color: #6CB4EE;
        /* Darker green on hover */
    }



    .form span {
        flex: 1 1 45%;
        position: relative;
        opacity: 0;
        transform: translateX(0);
    }

    .form span:nth-child(odd) {
        animation: slideInLeft 1s forwards;
    }

    .form span:nth-child(even) {
        animation: slideInRight 1s forwards;
    }

    @keyframes slideInLeft {
        0% {
            opacity: 0;
            transform: translateX(-100%);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInRight {
        0% {
            opacity: 0;
            transform: translateX(100%);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .submit {
        text-align: center;
        width: 10%;
        padding: 15px 0 9px 15px;
        font-size: larger;
        color: red;
        background: black;
        border: 0;
        border-radius: 20px;
        border: 1px solid red;
        color: #6CB4EE;
        border-right: #0066b2;
    }
</style>

<div class="my-whole-section" id="inputbox">
    <div class="my-button">
        <span id="phone-number" class="phone-number"><?php print $phone; ?></span>
        <img src="supernova_dipu/images/iHelpBD_logo_sfngqw.png" alt="">
    </div>

    <?php if ($customer_zap_channel != '') { ?>
        <span id="did-number" class="did-number">DID- <?php print "" . zapCustomer($customer_zap_channel); ?></span>
    <?php } ?>


    <div class="my-row">
        <form method="POST" class="form">
            <input type="hidden" name="this_id" id="this_id" class="balloon" value="<?php print $this_id; ?>" />

            <span>
                <input class="balloon" name="name" id="name" type="text" placeholder="name"
                    onblur="myFormData('name',document.getElementById('this_id').value);" value="<?php print $name; ?>" />
                <label for="name">name</label>
            </span>

            <span>
                <input type="number" class="balloon" name="phone-number" id="phone_number" placeholder="phone number"
                 value="<?php print $name; ?>" /><label for="phone_number">phone number</label>
            </span>

            <span>
                <input class="balloon" type="text" name="email" id="email" placeholder="Email"
                    onblur="myFormData('email',document.getElementById('this_id').value);" class="form-control"
                    value="<?php print $email; ?>" />
                <label for="email">Email</label>
            </span>

            <span>
                <select class="balloon" name="country" id="country" onchange="getDistrict();"  onblur="myFormData('country',document.getElementById('this_id').value);">
                    <option value="" selected>Select country</option>
                    <?php 
                      $sql=mysqli_query($conn,"SELECT * FROM `country`");
                      while($row=mysqli_fetch_assoc($sql)){
                    ?>
                    <option value="<?php echo  $row['id'];?>"><?php echo  $row['country_name'];?></option>
                    <?php } ?>
                </select>
                <label for="country">country</label>
            </span>

            <span>
                <select class="balloon" name="district" id="district"  onblur="myFormData('district',document.getElementById('this_id').value);">
                    <option value="" selected>Select district</option>
                </select>
                <label for="district">district</label>
            </span>
            
            


            <!-- <span>
                <select class="balloon" name="category_id" id="category_id" onblur="myFormData('category_id',document.getElementById('this_id').value);">
                    <option value="">Select Category</option>
                    <?php
                    $category_query = mysqli_query($conn, "SELECT * FROM `asterisk`.`get_category`");
                    while ($category_query_row = mysqli_fetch_array($category_query)) {
                        $cat_id = $category_query_row['id'];
                        $cat_name = $category_query_row['cat_name'];
                    ?>
                        <option <?php if ($cat_id == $category_id) {
                                    print 'selected';
                                } ?>
                            value="<?php print $cat_id; ?>">
                            <?php print $cat_name; ?>
                        </option>
                    <?php } ?>
                </select>
                <label for="category_id">Category</label>
            </span> -->

            <!-- <span>
                <select class="balloon" name="sub_category_id" id="sub_category_id" onchange="myFormData('sub_category_id',document.getElementById('this_id').value);">
                    <option value="">Select Sub Category</option>
                </select>
                <label for="sub_category_id">Sub Category</label>
            </span> -->

            <span>
                <input class="balloon" type="text" name="address" id="address" placeholder="Address"
                    onblur="myFormData('address',document.getElementById('this_id').value);" class="form-control"
                    value="<?php print $address; ?>" />
                <label for="address">Address</label>
            </span>

            <!-- <span>
                <select class="balloon" name="districts" id="districts" onblur="myFormData('districts',document.getElementById('this_id').value);">
                    <option value="">Select District</option>
                    <?php
                    $district_query = mysqli_query($conn, "SELECT * FROM `asterisk`.`momin`");
                    while ($district_query_row = mysqli_fetch_array($district_query)) {
                        $district_id = $district_query_row['id'];
                        $district_name = $district_query_row['districts_name'];
                    ?>
                        <option <?php if ($district_id == $districts) {
                                    print 'selected';
                                } ?>
                            value="<?php print $district_id; ?>">
                            <?php print $district_name; ?>
                        </option>
                    <?php } ?>
                </select>
                <label for="districts">District</label>
            </span> -->

            <span>
                <input class="balloon" type="text" name="profession" id="profession" placeholder="profession"
                    onblur="myFormData('profession',document.getElementById('this_id').value);" class="form-control"
                    value="<?php print $profession; ?>" />
                <label for="profession">profession</label>
            </span>

            <span>
                <input class="balloon" type="datetime-local" name="date" id="date" placeholder="Date"
                    onblur="myFormData('date',document.getElementById('this_id').value);" class="form-control" value="<?php print date('Y-m-d\TH:i', strtotime($date . ' 00:00')); ?>" />
                <label for="date">Date</label>
            </span>

            <span>
                <textarea class="balloon" type="text" name="note" id="note" placeholder="Note"
                    onblur="myFormData('note',document.getElementById('this_id').value);" class="form-control"><?php print $note; ?></textarea>
                <label for="note">Note</label>
            </span>
    </div>

    <div style="text-align: right;">
        <button class="submit" type="submit" name="submit" value="submit" id="submit" placeholder="submit">submit</button>
    </div>
    </form>

    <!-- <div class="my-button">
        <button class="button">Button</button>
    </div> -->

    <?php include 'previous.php'; ?>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
        const phoneNumber = document.getElementById("phone-number");
        const didNumber = document.getElementById("did-number");
        setTimeout(() => {
            phoneNumber.classList.add("visible");
            didNumber.classList.add("visible");
        }, 1000); // Adjust the delay as needed

        const spans = document.querySelectorAll('.form span');
        spans.forEach((span, index) => {
            setTimeout(() => {
                span.style.opacity = '1';
                span.style.transform = 'translateX(0)';
            }, index * 200); // Adjust the delay as needed
        });
    });

    $(document).ready(function() {
        getSubCategory('<?php echo $sub_category_id; ?>');
    });

    $('#category_id').change(function() {
        getSubCategory('');
    });

    function getSubCategory(sub_cat_id) {
        var category_id = $('#category_id').val();
        $.ajax({
            url: 'supernova_dipu/get_sub_categories.php',
            method: 'POST',
            data: {
                'category_id': category_id,
                'sub_cat_id': sub_cat_id,
                'type': "SUB_CAT_ONCHANGE"
            },
            success: function(data) {
                console.log(data);
                $("#sub_category_id").html(data);
            }
        });
    }
    function getDistrict() {
        var country = $('#country').val();
        // alert(country);
        $.ajax({
            url: 'supernova_dipu/get_sub_categories.php',
            method: 'POST',
            data: {
                'country': country,
                'type': "GET_DISTRICT"
            },
            success: function(data) {
                console.log(data);
                $("#district").html(data);
            }
        });
    }
</script>