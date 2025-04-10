<?php
defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\File\File;
use Application\Service\Picture;

assert(isset($item, $index));
?>
<div class="xl:w-6/12 lg:w-6/12 w-full flex-[0_0_auto] !px-[15px] max-w-full !mb-0">
    <div id="accordion-1" class="accordion-wrapper">
        <div class="card accordion-item !mb-5">
            <div class="card-header !mb-0 !p-[.9rem_1.3rem_.85rem] !border-0 !bg-inherit" id="accordion-heading-1-1">
                <button class="hover:!text-[#3f78e0] collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-1"
                        aria-expanded="false" aria-controls="accordion-collapse-1-1">
                    <?php echo $item['cardTitle1']; ?>
                </button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-1-1" class="collapse" aria-labelledby="accordion-heading-1-1" data-bs-target="#accordion-1">
                <div class="card-body flex-[1_1_auto] p-[0_1.25rem_.25rem_2.35rem]">
                    <p>
                        <?php echo $item['content1']; ?>
                    </p>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.accordion-wrapper -->
</div>
<!--/column -->
<div class="xl:w-6/12 lg:w-6/12 w-full flex-[0_0_auto] !px-[15px] max-w-full">
    <div id="accordion-2" class="accordion-wrapper">
        <div class="card accordion-item !mb-5">
            <div class="card-header !mb-0 !p-[.9rem_1.3rem_.85rem] !border-0 !bg-inherit" id="accordion-heading-2-1">
                <button class="hover:!text-[#3f78e0] collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-1"
                        aria-expanded="false" aria-controls="accordion-collapse-2-1">
                    <?php echo $item['cardTitle2']; ?>
                </button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-2-1" class="collapse" aria-labelledby="accordion-heading-2-1" data-bs-target="#accordion-2">
                <div class="card-body flex-[1_1_auto] p-[0_1.25rem_.25rem_2.35rem]">
                    <p>
                        <?php echo $item['content2']; ?>
                    </p>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.collapse -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.accordion-wrapper -->
</div>
<!--/column -->








    <!--/column -->



