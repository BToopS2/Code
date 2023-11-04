<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studens_list</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body class="bg-content">
    <main class="dashboard d-flex">
        <!-- start sidebar -->
        <?php 
            include "component/sidebar.php";
        ?>
        <!-- end sidebar -->

        <!-- start content page -->
        <div class="container-fluid px-4">
        <?php 
            include "component/header.php";
        ?>
          
        
            <!-- start student list table -->
            <div class="button-add-student">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">PayMent</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">PayMent</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form method="POST" action="add_payment.php" enctype="multipart/form-data">
                                  
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Name:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="Name">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Lịch Trình:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="PaymentSchedule">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Số Hóa Đơn:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="BillNumber">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Số tiền đã thanh toán</label>
                                    <input type="text" class="form-control" id="recipient-name" name="AmountPaid">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Số tiền còn nợ:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="BalanceAmount">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Ngày thanh toán:</label>
                                    <input type="date" class="form-control" id="recipient-name" name="Date">
                                  </div>
                                  <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-primary">add PayMent</button>
                              </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                <div class="courses">
                    <table class="table table-responsive">
                        <thead>
                            <th>Tên</th>
                            <th>Lịch trình thanh toán</th>
                            <th>Số hóa đơn</th>
                            <th>Số tiền đã thanh toán</th>
                            <th>Số tiền còn nợ</th>
                            <th>Ngày thanh toán</th>
                        </thead>
                        <tbody> 
                        <?php include 'conixion.php'; 
                                $requete = "SELECT * FROM payments_list";
                                $result = $con -> query($requete);

                                foreach($result as $value):
                            ?>

                            <tr> 
                                <td><?php echo $value['Name'] ?></td>
                                <td><?php echo $value['PaymentSchedule'] ?></td>
                                <td><?php echo $value['BillNumber'] ?></td>
                                <td><?php echo $value['AmountPaid'] ?></td>
                                <td><?php echo $value['BalanceAmount'] ?></td>
                                <td><?php echo $value['Date'] ?></td>
                            </tr>
                            
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            
            </div>
               
        </div>
        <!-- end content page -->
    </main>

    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>