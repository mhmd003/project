<?php include('../inc/header.php'); ?>  
<?php include('../inc/nav.php'); ?>
<?php include('../core/database.php');
session_start();
$errors=[];
$old=[];
if(isset($_SESSION['errors'])){
 $errors = $_SESSION['errors'];
}
if(isset($_SESSION['old'])){
    $old = $_SESSION['old'];
}
if(isset($_GET)){
$id=$_GET['id'];
$sql="SELECT * FROM `doctors` WHERE iddoctor= $id ";
$data=get($sql);

}
?>
<div class="page-wrapper">

        <div class="container">
        <?php foreach($data as $value): ?>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="../index.html">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="./
                    ">doctors</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $value['name']; ?></li>
                </ol>
            </nav>
            <div class="d-flex flex-column gap-3 details-card doctor-details">
                <div class="details d-flex gap-2 align-items-center">
                    <img src="../public/assets/images/major.jpg" alt="doctor" class="img-fluid rounded-circle" height="150"
                        width="150">
                    <div class="details-info d-flex flex-column gap-3 ">
                        <h4 class="card-title fw-bold"><?php echo $value['name']; ?></h4>
                        <div class="d-flex gap-3 align-bottom">
                            <ul class="rating">
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                            </ul>
                            <a href="#" class="align-baseline">submit rating</a>
                        </div>
                        <h6 class="card-title fw-bold">doctor major and more info about the doctor in summary</h6>
                    </div>
                </div>
                <hr />
                <form class="form" action="../core/booking.php?id=<?php echo $id; ?>" method="POST"a>
                    <div class="form-items">
                        <div class="mb-3">
                            <label class="form-label required-label" for="name">Name</label>
                            <input type="text" class="form-control" name="name"  <?php if(isset($old['name'])){ ?> value="<?php echo$old['name'] ?>"><?php }?>>
                            
                            <?php if(isset($errors['name']) && !empty($errors['name'])) {?>
                        <p class="text-danger"><?php echo $errors['name'];?> </p>   
                        <?php } ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="phone">Phone</label>
                            <input type="number" class="form-control" name="phone" <?php if(isset($old['phone'])){ ?> value="<?php echo$old['phone'] ?>"><?php }?>>
                                                   
                            <?php if(isset($errors['phone']) && !empty($errors['phone'])) {?>
                        <p class="text-danger"><?php echo $errors['phone'];?> </p>  
                        <?php } ?>


                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="email">Email</label>
                            <input type="text" class="form-control" name="email" <?php if(isset($old['email'])){ ?> value="<?php echo$old['email'] ?>"><?php }?>>
                                                   
                            <?php if(isset($errors['email']) && !empty($errors['email'])) {?>
                        <p class="text-danger"><?php echo $errors['email'];?> </p>   
                        <?php } ?>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" value="Register" name="confirm">Confirm Booking</button>
                </form>
                <?php unset($_SESSION['errors']); ?>   
                <?php endforeach; ?>

            </div>
        </div>
    </div>
<?php include('../inc/footer.php'); ?>