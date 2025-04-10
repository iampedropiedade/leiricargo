<?php
defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\File\File;
use Application\Service\Picture;

assert(isset($item, $index));
?>
<div class="xl:w-6/12 lg:w-6/12 w-full flex-[0_0_auto] !px-[15px] max-w-full !mb-0">
    <div id="accordion-<?php echo $index;?>" class="accordion-wrapper">
        <div class="card accordion-item !mb-5">
            <div class="card-header !mb-0 !p-[.9rem_1.3rem_.85rem] !border-0 !bg-inherit" id="accordion-heading-<?php echo $index;?>">
                <button class="hover:!text-[#3f78e0] collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-<?php echo $index;?>"
                        aria-expanded="false" aria-controls="accordion-collapse-<?php echo $index;?>">
                    <?php echo $item['question']; ?>
                </button>
            </div>
            <!-- /.card-header -->
            <div id="accordion-collapse-<?php echo $index;?>" class="collapse" aria-labelledby="accordion-heading-<?php echo $index;?>"
                 data-bs-target="#accordion-<?php echo $index;?>">
                <div class="card-body flex-[1_1_auto] p-[0_1.25rem_.25rem_2.35rem]">
                    <p>
                        <?php echo $item['answer']; ?>
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












