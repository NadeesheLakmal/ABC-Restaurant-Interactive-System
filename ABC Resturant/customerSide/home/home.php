<?php include_once('../components/header.php')?>
<!-- Hero Section with Video Background and Text Overlay -->
<section id="hero" style="position: relative;">
    <video autoplay loop muted playsinline poster="your-poster-image.jpg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
        <source src="../image/SteakOnGrillCloseup.mp4" type="video/mp4">
        <!-- Add additional source elements for 
        1.  SteakOnGrillCloseup

        other video formats if needed -->
    </video>
    <div class="hero container" style="position: relative; z-index: 1;">
        <div>
            <h1><strong><h1 class="text-center" style="font-family:Copperplate; color:whitesmoke;"> ABC Restaurant</h1><span></span></strong></h1>
            <h1><strong style="color:white;">DINING & BAR<span></span></strong></h1>
            <a href="#projects" type="button" class="cta">MENU</a>
        </div>
    </div>
</section>
<!-- End Hero Section -->
  
  
  
  <!-- menu Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Me<span>n</span>u</h1>
      </div>
     
        
       <select style="text-align:center;" id="menu-category" class="menu-category">
        <option value="blue">ALL ITEMS</option>
        <option value="yellow">MAIN DISHES</option>
        <option value="red">SIDE DISHES</option>
        <option value="green">DRINKS</option>
      </select>
        
    <div class="yellow msg"> 
     
        <div></div>
      <div class="mainDish">
           <h1 style="text-align:center;">MAIN DISHES</h1>
          <?php foreach ($mainDishes as $item): ?>
      <p>
        <span class="item-name"> <strong><?php echo $item['item_name']; ?></strong></span>
        <span class="item-price">RM<?php echo $item['item_price']; ?></span><br>
        <span class="item_type"><i><?php echo $item['item_type']; ?></i></span>
        <hr>
        
      </p>
    <?php endforeach; ?>
      </div>
    </div>
      
      
    <div class="red msg">
        <div></div>
      <div class="sideDish">
           <h1 style="text-align:center">SIDE DISHES</h1>
          <?php foreach ($sides as $item): ?>
      <p>
        <span class="item-name"> <strong><?php echo $item['item_name']; ?></strong></span>
        <span class="item-price">RM<?php echo $item['item_price']; ?></span><br>
        <span class="item_type"><i><?php echo $item['item_type']; ?></i></span>
        <hr>
      </p>
    <?php endforeach; ?>
      </div>
    </div>
        
      
      
    <div class="green msg">
        <div></div>
      <div class="drinks">
           <h1 style="text-align:center">DRINKS</h1>
          <?php foreach ($drinks as $item): ?>
      <p>
        <span class="item-name"> <strong><?php echo $item['item_name']; ?></strong></span>
        <span class="item-price">RM<?php echo $item['item_price']; ?></span><br>
        <span class="item_type"><i><?php echo $item['item_type']; ?></i></span>
        <hr>
      </p>
    <?php endforeach; ?>
      </div>
    </div>
      
      
       <div class="blue msg">
          
      <div class="mainDish">
           <h1 style="text-align:center">MAIN DISHES</h1>
          <?php foreach ($mainDishes as $item): ?>
      <p>
        <span class="item-name"> <strong><?php echo $item['item_name']; ?></strong></span>
        <span class="item-price">Rs<?php echo $item['item_price']; ?></span><br>
        <span class="item_type"><i><?php echo $item['item_type']; ?></i></span>
        <hr>
      </p>
    <?php endforeach; ?>
      </div>
             
           
     
      <div class="sideDish">
           <h1 style="text-align:center">SIDE DISHES</h1>
          <?php foreach ($sides as $item): ?>
      <p>
        <span class="item-name"> <strong><?php echo $item['item_name']; ?></strong></span>
        <span class="item-price">Rs<?php echo $item['item_price']; ?></span><br>
        <span class="item_type"><i><?php echo $item['item_type']; ?></i></span>
        <hr>
      </p>
    <?php endforeach; ?>
      </div>
            
      
      <div class="drinks">
           <h1 style="text-align:center">DRINKS</h1>
          <?php foreach ($drinks as $item): ?>
      <p>
        <span class="item-name"> <strong><?php echo $item['item_name']; ?></strong></span>
        <span class="item-price">Rs<?php echo $item['item_price']; ?></span><br>
        <span class="item_type"><i><?php echo $item['item_type']; ?></i></span>
        <hr>
      </p>
    <?php endforeach; ?>
      </div>
          
      </div>
    </div>
  </section>
  <!-- End menu Section -->


  
  <!-- About Section -->
<section id="about" ">
  <div class="about container">
    <div class="col-right">
        <h1 class="section-title" >About <span>Us</span></h1>
        <h2>ABC Restaurant Company History:</h2>
 <p>ABC Restaurant is a renowned dining establishment located in the heart of Colombo. The Gallery Cafe has become a popular choice for customers looking to celebrate special occasions or simply enjoy a relaxing meal, with a focus on providing delectable cuisine and a warm, welcoming atmosphere
 </p>
 <p>ABC Restaurant, offers a diverse and enticing menu that caters to a variety of tastes. This renowned cafe provides a wide selection of dishes including bar bites, fresh salads, hearty soups, and a range of exquisite main courses. Diners can indulge in succulent options such as grilled seafood, tender chicken, lamb, and beef dishes, along with a delightful assortment of burgers, sandwiches, pasta, and innovative fusion creations. The menu has been thoughtfully curated to present a perfect blend of classic favorites and contemporary delights, ensuring that every guest's culinary desires are met
 </p>
 <p>ABC Restaurant's ability to accommodate customers is one of its distinguishing features. The Gallery Cafe strives to create an inviting and comfortable dining environment, whether guests prefer to walk in or make reservations in advance. The cafe recognises the significance of creating memorable experiences, particularly for those celebrating special occasions. The Gallery Cafe is a popular choice for families, couples, and groups of friends because of its attentive staff and welcoming atmosphere.
 </p>
 <p>ABC Restaurant offers an enchanting outdoor bar, open seven days a week from 11:00 AM to 10:00 PM, alongside its elegant indoor dining area. This outdoor space creates a serene atmosphere where guests can relax and socialize while enjoying their favorite drinks and light snacks. The bar features a diverse selection of beverages, including cocktails, wines, beers, and non-alcoholic options, catering to every preference.


 </p>
    
      </div>
    </div>
  </section>
  <!-- End About Section -->
  
  
 <!-- Contact Section -->
<section id="contact">
  <div class="contact container">
    <div>
      <h1 class="section-title">Contact <span>info</span></h1>
    </div>
    <div class="contact-items">
      <div class="contact-item contact-item-bg">
        <div class="contact-info">
          <div class='icon'><img src="../image/icons8-phone-100.png" alt=""/></div>
          <h1>Phone</h1>
          <h2>+94 71 325 6667</h2>
        </div>
      </div>
      
      <div class="contact-item contact-item-bg"> 
        <div class="contact-info">
          <div class='icon'><img src="../image/icons8-email-100.png" alt=""/></div>
          <h1>Email</h1>
          <h2>ABC Restaurant@gmail.com</h2> 
        </div>
      </div>
      
      <div class="contact-item contact-item-bg">
        <div class="contact-info">
          <div class='icon'> <img src="../image/icons8-home-address-100.png" alt=""/></div>
          <h1>Address</h1>
          <h2>Lot 62, Third Floor, No.345, Galle Road, Colombo 00300, Sri Lanka</h2>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Contact Section -->

<?php 
include_once('../components/footer.php');
?>