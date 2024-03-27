<?php
include 'partials/header.php';

include 'partials/navbar.php';
?>
<section class="h-v-full d-flex align-center justify-content-center">
    <div class="d-flex w-100">
        <div class="col-6">
            <form action="services/pengakses-file.php" method="post" enctype="multipart/form-data">
                <div class="mb-2">
                    <label for="file" class="d-block mb-1">Input File Anda</label>
                    <div class="d-flex">
                        <input type="file" name="file" id="file" class="input-form col-6">
                    </div>
                </div>
                <button type="submit" name="submit" class="btn submit-btn">Submit</button>
            </form>
        </div>
        <div class="col-6">
            <form action="services/pengakses-file.php" method="post" enctype="multipart/form-data" class="mb-3">
                <div class="mb-2">
                    <label for="websiteLink" class="d-block mb-1">Input Link Website</label>
                    <div class="d-flex">
                        <input type="text" name="website-link" id="websiteLink" class="input-form col-6">
                    </div>
                </div>
                <button type="submit" name="submitWeb" class="btn submit-btn">Submit</button>
            </form>
            <!-- <span>Tampilan Website</span>
      <div id="websiteUi" class="overflow-hidden"></div> -->
        </div>
    </div>
</section>