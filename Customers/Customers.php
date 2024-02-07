<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet" />
</head>

<body>
    <style>
        body {
            background-image: url("https://themes.muffingroup.com/be/icecream2/wp-content/uploads/2019/09/icecream2-sectionbg3.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-family: "Titan One", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
        }

        .navbar-default {
            background-color: rgba(141, 12, 12, 0.973);
            border: none;
            border-radius: 0;
        }

        .navbar-default .navbar-nav>li>a:hover {
            color: white;
            text-decoration: underline;
        }

        .navbar-default .navbar-nav>li>a {
            color: white;
            font-weight: bold;
        }

        .navbar-default .navbar-nav>li.active>a,
        .navbar-default .navbar-nav>li.active>a:focus,
        .navbar-default .navbar-nav>li.active>a:hover {
            background-color: rgba(141, 12, 12, 0.973);
            text-decoration: underline;
            color: white;
        }

        .container {
            padding: 20px;
        }

        h2 {
            color: #d41442;
            font-weight: bolder;
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            border-top: none;
            border-bottom: 2px solid #d41442;
        }

        .table th {
            background-color: #d41442;
            color: white;
            font-weight: bold;
        }


        .btn-custom {
            color: #fff;
            background-color: #d41442;
            border-color: #d41442;
        }

        .btn-custom:hover {
            color: #fff;
            background-color: #b90d3c;
            border-color: #b90d3c;
        }

        .table-wrapper {
            border-radius: 15px;
            overflow: hidden;
        }
    </style>


    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="../index.php">
                    <img src="../ice-cream-cone.png" style="height: 40px;width: 40px; margin-top: -10px;"> </a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../About.php">About Us</a></li>
                <li><a href="../Treats.php">Treats</a></li>
                <li><a href="../Hours-Locations.php">Hours & Locations</a></li>
                <li><a href="../ContactUs.php">Contact Us</a></li>
                <li class="active"><a href="Customers/Customers.php">Customers</a></li>

            </ul>
        </div>
    </nav>



    <?php
    require_once '../database.php';

    $conn = connectToDatabase();

    $customers = getAllCustomers($conn);
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>All Customers</h2>
            </div>
            <div class="col-md-6 text-right">
                <button data-toggle="modal" data-target="#addCustomerModal" style="margin-top: 30px; background-color:#d41442; padding: 8px; color: white; border-radius: 15px">
                    Add Customer</button>

            </div>
        </div>
        <div class="table-wrapper">
            <div class="table-responsive">
                <table class="table table-hover" style="background-color: #f9f9f9;">
                    <thead>
                        <tr>
                            <th width="100px">Customer ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th width="100px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($customers as $customer) {
                            echo "<tr>";
                            echo "<td>" . $customer["customer_id"] . "</td>";
                            echo "<td>" . $customer["customer_name"] . "</td>";
                            echo "<td>" . $customer["customer_email"] . "</td>";
                            echo "<td>" . $customer["customer_phone"] . "</td>";
                            echo "<td>";
                            echo "<a href='#' data-toggle='modal' data-target='#editCustomerModal' class='btn btn-custom btn-sm btn-edit'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></a>&nbsp;";
                            echo "<a href='#' data-toggle='modal' data-target='#deleteCustomerModal' class='btn btn-custom btn-sm btn-delete'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
    $conn->close();
    ?>

    <!--Add customer modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="addCustomerModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius: 15px;">
                <div class="modal-header" style="background-color: #d41442; color: white; border-bottom: none; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <h5 class="modal-title" style="font-size: large;">Add Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="addCustomer.php">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                        </div>
                        <button type="submit" class="btn btn-primary" style="background-color: #008000;" name="submit">Confirm</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </form>

                </div>


            </div>

        </div>
    </div>
    </div>

    <!-- Edit customer modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="editCustomerModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius: 15px;">
                <div class="modal-header" style="background-color: #d41442; color: white; border-bottom: none; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <h5 class="modal-title" style="font-size: large;">Edit Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editCustomerForm" method="post" action="editCustomer.php">
                        <div class="form-group">

                            <input type="hidden" class="form-control" id="edit-id" name="edit-id" placeholder="id">
                        </div>
                        <div class="form-group">
                            <label for="edit-name">Name:</label>
                            <input type="text" class="form-control" id="edit-name" name="edit-name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="edit-email">Email:</label>
                            <input type="email" class="form-control" id="edit-email" name="edit-email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="edit-phone">Phone:</label>
                            <input type="text" class="form-control" id="edit-phone" name="edit-phone" placeholder="Phone">
                        </div>
                        <button type="submit" class="btn btn-primary" style="background-color: #008000;" name="submit">Confirm</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete customer modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="deleteCustomerModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border-radius: 15px;">
                <div class="modal-header" style="background-color: #d41442; color: white; border-bottom: none; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <h5 class="modal-title" style="font-size: large;">Are you sure you want to delete this customer?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="deleteCustomerForm" method="post" action="deleteCustomer.php">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="delete-id" name="delete-id" placeholder="id">
                            <button type="submit" class="btn btn-primary" style="background-color: #008000;" name="submit">Confirm</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script>
        $(document).ready(function() {
            $('.btn-edit').click(function() {
                var row = $(this).closest('tr');
                var id = row.find('td:eq(0)').text();
                var name = row.find('td:eq(1)').text();
                var email = row.find('td:eq(2)').text();
                var phone = row.find('td:eq(3)').text();
                $("#edit-id").val(id);
                $('#edit-name').val(name);
                $('#edit-email').val(email);
                $('#edit-phone').val(phone);
            });
        });
        $(document).ready(function() {
            $('.btn-delete').click(function() {
                var row = $(this).closest('tr');
                var id = row.find('td:eq(0)').text();
                $("#delete-id").val(id);

            });
        });
    </script>
</body>

</html>