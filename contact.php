<!DOCTYPE html>
<html lang="fr">
<?php
/**
 * Created by PhpStorm.
 * User: moi
 * Date: 24/09/2019
 * Time: 12:08
 *
 */
?>
<div class="site-section site-section-sm" id="contact">
      <div class="container">
        <div class="row">

          <div class="col-md-12 col-lg-8 mb-5">



            <form action="contactmail.php" class="p-5 bg-white" method="POST">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Identité</label>
                  <input type="text" name="fullname" class="form-control" placeholder="Nom - prénom">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" name="mail" class="form-control" placeholder="Addresse Email">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="phone">Téléphone</label>
                  <input type="text" name="phone" class="form-control" placeholder="+33" maxlength="10">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Message</label>
                  <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Votre plainte ou retours, pour toute demande directe veuillez nous appeler directement"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary pill px-4 py-2">
                </div>
              </div>
            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">Quelquepart à Paris, France</p>

              <p class="mb-0 font-weight-bold">Téléphone</p>
              <p class="mb-4"><a href="#">01 23 45 67 89</a></p>

              <p class="mb-0 font-weight-bold">Email</p>
              <p class="mb-0"><a href="#">Netpune.World@gmail.com</a></p>

            </div>


          </div>
        </div>
      </div>
    </div>
  </html>
