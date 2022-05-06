

<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="main">
        <?php if($message = Session::get('success')): ?>
        <div id="modal"> 
            <div class="modal-content">
              <div class="header">
                Requested Submitted!
              </div>
              <div class="note">
                <?php echo e($message); ?>

              </div>
                <div class="copy">  
                  <a href="<?php echo e(route('welcome')); ?>">Close</a>
                </div>
            </div>
              <div class="overlay"></div> 
          </div>
        <?php endif; ?>
          <img class="banner__welc" src="<?php echo e(asset('assets/images/welcome.png')); ?>" alt="welcomebanner">
          <div class="banner__txt">
            <p>Welcome to<br>Barangay Pitogo</p>
          </div>
          <hr>
          <div class="center__ind">
              <div class="hotline"> 
                <h2>Hotlines</h2>
                <table class="tbl__hotline">
                  <tr>
                    <td class="hotline-name">Pitogo Barangay Hall</td>
                    <td class="hotline-num">8831-3375</td>
                  </tr>
                  <tr>
                    <td class="hotline-name">Pitogo Outpost</td>
                    <td class="hotline-num">7729-3271</td>
                  </tr>
                  <tr>
                    <td class="hotline-name">Health Center</td>
                    <td class="hotline-num">8712-9354</td>
                  </tr>
                  <tr>
                    <td class="hotline-name">Bantay Bayan Base</td>
                    <td class="hotline-num">8712-9353</td>
                  </tr>
                  <tr>
                    <td class="hotline-name">Makati City Hall Trunkline</td>
                    <td class="hotline-num">8870-1000</td>
                  </tr>
                  <tr>
                    <td class="hotline-name">Makati C3 (Emergency Rescue Operations)</td>
                    <td class="hotline-num">168/8236-5790</td>
                  </tr>
                  <tr>
                    <td class="hotline-name">Makati Police Department</td>
                    <td class="hotline-num">8887-1798 / 0929-7936525</td>
                  </tr>
                  <tr>
                    <td class="hotline-name">Bureau of Fire Protection</td>
                    <td class="hotline-num">8818-5150 / 8816-2553</td>
                  </tr>
                  <tr>
                    <td class="seemore" colspan="2" style="border: none; padding-top: 15px;">
                      <a href="<?php echo e(route('hotline')); ?>">See More</a>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="stack">
                <div class="banner-container">
                  <img src="<?php echo e(asset('assets/images/cv19.png')); ?>" class="banner">
                  <div class="vax-txt">
                    <p>Covid-19<br>Vaccination</p>
                    <a href="https://www.covid19vaccine.safemakati.com"><button type="button" class="vax-btn">Register</button></a>
                  </div>
                </div>
                <div class="banner-container">
                  <img src="<?php echo e(asset('assets/images/safetyseal.png')); ?>" class="banner">
                  <div class="seal-txt">
                    <p>Safety Seal</p>
                    <a href="https://umakemakatisafe.com/"><button type="button" class="seal-btn">Register</button></a>
                  </div>
                </div>
                <div class="banner-container">
                  <img src="<?php echo e(asset('assets/images/certification.png')); ?>" class="banner">
                  <div class="cert-txt">
                    <p>Certificates &#38<br>Permits</p>
                    <a href="<?php echo e(route('brgy_cert')); ?>"><button type="button" class="cert-btn">Get Yours</button></a>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>

    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rtu-management-sys-api\resources\views/welcome.blade.php ENDPATH**/ ?>