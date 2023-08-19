<?php include('../inc/header.php'); ?>  
<?php include('../inc/nav.php'); ?>
<?php include('../core/database.php');
$sql="SELECT * FROM `major`  ";
$data=get($sql);

?>
<div class="page-wrapper">
    
<div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="./index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">majors</li>
                </ol>
            </nav>

            <div class="majors-grid">
                        <?php foreach($data as $value): ?>
                <div class="card p-2" style="width: 18rem;">
                    <img src="../public/assets/images/<?php echo $value['image']; ?>" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center"><?php echo $value['title']; ?></h4>
                        <a href="doctor.php ?id=<?php echo $value['id']; ?>" class="btn btn-outline-primary card-button">Browse Doctors</a>
                    </div>
                </div>

                <?php endforeach; ?>
            </div>

            <nav class="mt-5" aria-label="navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link page-prev" href="#" aria-label="Previous">
                            <span aria-hidden="true">
                                < </span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link page-next" href="#" aria-label="Next">
                            <span aria-hidden="true"> > </span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <?php include('../inc/footer.php'); ?>
