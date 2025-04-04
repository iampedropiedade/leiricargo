<?php
defined('C5_EXECUTE') or die("Access Denied.");
?>
<header class="relative wrapper !bg-black">
      <nav class="navbar navbar-expand-lg classic !absolute navbar-dark !bg-black">
        <div class="container xl:!flex-row lg:!flex-row !flex-nowrap items-center">
          <div class="navbar-brand w-full">
            <a href="./index.html">
              <img class="logo-dark" src="<?php echo $this->getThemePath() ?>/app/img/logo-purple.png" srcset="<?php echo $this->getThemePath() ?>/app/img/logo-purple@2x.png 2x" alt="image">
              <img class="logo-light" src="<?php echo $this->getThemePath() ?>/app/img/logo-light.png" srcset="<?php echo $this->getThemePath() ?>/app/img/logo-light@2x.png 2x" alt="image">
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header xl:!hidden lg:!hidden flex items-center justify-between flex-row p-6">
              <h3 class="!text-white xl:!text-[1.5rem] !text-[calc(1.275rem_+_0.3vw)] !mb-0">Sandbox</h3>
              <button type="button" class="btn-close btn-close-white !mr-[-0.75rem] m-0 p-0 leading-none !text-[#343f52] transition-all duration-[0.2s] ease-in-out border-0 motion-reduce:transition-none before:text-[1.05rem] before:text-white before:content-['\ed3b'] before:w-[1.8rem] before:h-[1.8rem] before:leading-[1.8rem] before:shadow-none before:transition-[background] before:duration-[0.2s] before:ease-in-out before:!flex before:justify-center before:items-center before:m-0 before:p-0 before:rounded-[100%] hover:no-underline bg-inherit before:bg-[rgba(255,255,255,.08)] before:font-Unicons hover:before:bg-[rgba(0,0,0,.11)]  " data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body xl:!ml-auto lg:!ml-auto flex  flex-col !h-full">
                <!--NAVBAR -->
              <ul class="navbar-nav">
              <li class="nav-item">
              <a class="nav-link  font-bold !tracking-[-0.01rem]" href="#">Vidas</a>
              </li> 
              <li class="nav-item">
              <a class="nav-link  font-bold !tracking-[-0.01rem]" href="#">Mais Vidas</a>
              </li>
              <li class="nav-item">
              <a class="nav-link  font-bold !tracking-[-0.01rem]" href="#">Vidas Tristes</a>
              </li>
              <li class="nav-item">
              <a class="nav-link  font-bold !tracking-[-0.01rem]" href="#">Coleção</a>
              </li>
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
    </header>
<main class="pt-24">