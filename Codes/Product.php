<!DOCTYPE html>
<html lang="en">

    <head>
            <meta charset="utf-8">
            <title>Product</title>
            <link rel="stylesheet" href="ProductPage.css">
    </head>
    
    <body>
        <div class="banner">
            
            <div class="navbar">
                
                <img src="Logo.png" class="logo" onclick="document.location='Homepage.php'">        
                <ul>
                    <li><a href="ContactUs.php">Contact Us</a></li>
					<li><a href="AboutUs.php">About Us</a></li>
					<li><a href="Product.php">Product</a></li>
					<li><a href="cart.php">Cart</a></li>
                </ul>
            </div>
			
			<div class="container">
				<div class="title">
					<hr>
					<h1>Fresh Produce</h1>
					<hr>
				</div>
				<!----------End of Title---------->
				<div class="chatbox">
					<div><input type="checkbox" id=".Vegetable" checked>  <label for=".Vegetable">Vegetable</label></div>
					<div><input type="checkbox" id=".Meat"  checked>  <label for=".Meat">Meat</label></div>
					<div><input type="checkbox" id=".Frozen Food"  checked>  <label for=".Frozen Food">Frozen Food</label></div>
				</div>

				<div class="row">
					<div class=".Vegetable">
						<div class="column">
							<div class="card">
								<div class="imgBox">
									<img src="Images/cabbage.png" alt="cabbage" class="item">
								</div>

								<div class="contentBox">
									<h3>Cabbage</h3>
									<h2 class="price">RM5.30</h2>
									<h2 class="originalprice"><del>RM5.80</del> 13%</h2>
									<a href="#" class="buy">View Details</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class=".Vegetable">
						<div class="column">
							<div class="card">
								<div class="imgBox">
									<img src="Images/brocoli.png" alt="brocoli" class="item">
								</div>

								<div class="contentBox">
									<h3>Brocoli</h3>
									<h2 class="price">RM3.50</h2>
									<h2 class="originalprice"><del>RM3.80</del> 7%</h2>
									<a href="#" class="buy">View Details</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class=".Vegetable">
						<div class="column">
							<div class="card">
								<div class="imgBox">
									<img src="Images/cauliflower.png" alt="cauliflower" class="item">
								</div>

								<div class="contentBox">
									<h3>Cauliflower</h3>
									<h2 class="price">RM5.70</h2>
									<h2 class="originalprice"><del>RM6.30</del> 9%</h2>
									<a href="#" class="buy">View Details</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class=".Vegetable">
						<div class="column">
							<div class="card">
								<div class="imgBox">
									<img src="Images/eggplant.png" alt="eggplant" class="item">
								</div>

								<div class="contentBox">
									<h3>Eggplant</h3>
									<h2 class="price">RM6.50</h2>
									<h2 class="originalprice"><del>RM6.60</del> 2%</h2>
									<a href="#" class="buy">View Details</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row2">
					<div class=".Vegetable">
						<div class="column">
							<div class="card">
								<div class="imgBox">
									<img src="Images/chilies.png" alt="chilies" class="item">
								</div>

								<div class="contentBox">
									<h3>Chilies</h3>
									<h2 class="price">RM5.50</h2>
									<h2 class="originalprice"><del>RM5.60</del> 2%</h2>
									<a href="#" class="buy">View Details</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class=".Vegetable">
						<div class="column">
							<div class="card">
								<div class="imgBox">
									<img src="Images/bok choy.png" alt="bok choy" class="item">
								</div>

								<div class="contentBox">
									<h3>Bok Choy</h3>
									<h2 class="price">RM4.70</h2>
									<h2 class="originalprice"><del>RM5.20</del> 9%</h2>
									<a href="#" class="buy">View Details</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class=".Vegetable">
						<div class="column">
							<div class="card">
								<div class="imgBox">
									<img src="Images/avocado.png" alt="avocado" class="item">
								</div>

								<div class="contentBox">
									<h3>Avocado</h3>
									<h2 class="price">RM6.90</h2>
									<h2 class="originalprice"><del>RM7.00</del> 1%</h2>
									<a href="#" class="buy">View Details</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class=".Vegetable">
						<div class="column">
							<div class="card">
								<div class="imgBox">
									<img src="Images/asparagus.png" alt="asparagus" class="item">
								</div>

								<div class="contentBox">
									<h3>Asparagus</h3>
									<h2 class="price">RM12.30</h2>
									<h2 class="originalprice"><del>RM12.90</del> 4%</h2>
									<a href="#" class="buy">View Details</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			
				<div class="row3">
					<div class=".Frozen Food">
						<div class="column">
							<div class="card">
								<div class="imgBox">
									<img src="Images/dusted baby squid.png" alt="dusted baby squid" class="item">
								</div>

								<div class="contentBox">
									<h3>Dusted Baby Squid</h3>
									<h2 class="price">RM22.55</h2>
									<h2 class="originalprice"><del>RM23.60</del> 4%</h2>
									<a href="#" class="buy">View Details</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class=".Frozen Food">
						<div class="column">
							<div class="card">
								<div class="imgBox">
									<img src="Images/fish chips.png" alt="fish chips" class="item">
								</div>

								<div class="contentBox">
									<h3>Fish Chips</h3>
									<h2 class="price">RM16.40</h2>
									<h2 class="originalprice"><del>RM17.70</del> 7%</h2>
									<a href="#" class="buy">View Details</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class=".Frozen Food">
						<div class="column">
							<div class="card">
								<div class="imgBox">
									<img src="Images/popcorn fish.png" alt="popcorn fish" class="item">
								</div>

								<div class="contentBox">
									<h3>Popcorn Fish</h3>
									<h2 class="price">RM19.90</h2>
									<h2 class="originalprice"><del>RM21.00</del> 5%</h2>
									<a href="#" class="buy">View Details</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class=".Frozen Food">
						<div class="column">
							<div class="card">
								<div class="imgBox">
									<img src="Images/lemon dill fish fillets.png" alt="lemon dill fish fillets" class="item">
								</div>

								<div class="contentBox">
									<h3>Lemon Dill Fish Fillets</h3>
									<h2 class="price">RM14.50</h2>
									<h2 class="originalprice"><del>RM15.00</del> 3%</h2>
									<a href="#" class="buy">View Details</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row4">
					<div class=".Frozen Food">
						<div class="column">
							<div class="card">
								<div class="imgBox">
									<img src="Images/salt and pepper squids.png" alt="salt and pepper squids" class="item">
								</div>

								<div class="contentBox">
									<h3>Salt And Pepper Squids</h3>
									<h2 class="price">RM23.20</h2>
									<h2 class="originalprice"><del>RM23.50</del> 1%</h2>
									<a href="#" class="buy">View Details</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class=".Frozen Food">
						<div class="column">
							<div class="card">
								<div class="imgBox">
									<img src="Images/sweet chilli fish cocktails.png" alt="sweet chilli fish cocktails" class="item">
								</div>

								<div class="contentBox">
									<h3>Sweet Chilli Fish Cocktails</h3>
									<h2 class="price">RM19.70</h2>
									<h2 class="originalprice"><del>RM22.60</del> 12%</h2>
									<a href="#" class="buy">View Details</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class=".Frozen Food">
						<div class="column">
							<div class="card">
								<div class="imgBox">
									<img src="Images/tempura black pepper fish fillets.png" alt="tempura black pepper fish fillets" class="item">
								</div>

								<div class="contentBox">
									<h3>Tempura Black Pepper Fish Fillets</h3>
									<h2 class="price">RM23.25</h2>
									<h2 class="originalprice"><del>RM24.00</del> 1%</h2>
									<a href="#" class="buy">View Details</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class=".Frozen Food">
						<div class="column">
							<div class="card">
								<div class="imgBox">
									<img src="Images/tempura fish cocktails.png" alt="tempura fish cocktails" class="item">
								</div>

								<div class="contentBox">
									<h3>Tempura Fish Cocktails</h3>
									<h2 class="price">RM24.30</h2>
									<h2 class="originalprice"><del>RM24.90</del> 2%</h2>
									<a href="#" class="buy">View Details</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row5">
					<div class=".Frozen Food">
						<div class="column">
							<div class="card">
								<div class="imgBox">
									<img src="Images/tempura fish fillets.png" alt="tempura fish fillets" class="item">
								</div>

								<div class="contentBox">
									<h3>Tempura Fish Fillets</h3>
									<h2 class="price">RM15.00</h2>
									<h2 class="originalprice"><del>RM19.00</del> 21%</h2>
									<a href="#" class="buy">View Details</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class=".Frozen Food">
						<div class="column">
							<div class="card">
								<div class="imgBox">
									<img src="Images/tempura natural calamari rings.png" alt="tempura natural calamari rings" class="item">
								</div>

								<div class="contentBox">
									<h3>Tempura Natural Calamari Rings</h3>
									<h2 class="price">RM30.30</h2>
									<h2 class="originalprice"><del>RM31.20</del> 2%</h2>
									<a href="#" class="buy">View Details</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class=".Meat">
						<div class="column">
							<div class="card">
								<div class="imgBox">
									<img src="Images/chicken.png" alt="chicken" class="item">
								</div>

								<div class="contentBox">
									<h3>Chicken</h3>
									<h2 class="price">RM9.40</h2>
									<h2 class="originalprice"><del>RM10.00</del> 6%</h2>
									<a href="#" class="buy">View Details</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class=".Meat">
						<div class="column">
							<div class="card">
								<div class="imgBox">
									<img src="Images/salmon.png" alt="salmon" class="item">
								</div>

								<div class="contentBox">
									<h3>Salmon</h3>
									<h2 class="price">RM12.30</h2>
									<h2 class="originalprice"><del>RM12.90</del> 4%</h2>
									<a href="#" class="buy">View Details</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row6">
					<div class=".Meat">
						<div class="column">
							<div class="card">
								<div class="imgBox">
									<img src="Images/beef.png" alt="beef" class="item">
								</div>

								<div class="contentBox">
									<h3>Beef</h3>
									<h2 class="price">RM9.70</h2>
									<h2 class="originalprice"><del>RM10.00</del> 3%</h2>
									<a href="#" class="buy">View Details</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class=".Meat">
						<div class="column">
							<div class="card">
								<div class="imgBox">
									<img src="Images/crab.png" alt="crab" class="item">
								</div>

								<div class="contentBox">
									<h3>Crab</h3>
									<h2 class="price">RM36.70</h2>
									<h2 class="originalprice"><del>RM40.20</del> 8%</h2>
									<a href="#" class="buy">View Details</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!----------End of FAQ---------->
        </div>	
		
		<script>
			// Hide the element with classToHide
			function hide(classToHide) {	
			  [].forEach.call(document.getElementsByClassName(classToHide), function (el) {
				el.hidden = true;
				});  
			}

			// Show the element with classToShow
			function show(classToShow) {	
			  [].forEach.call(document.getElementsByClassName(classToShow), function (el) {
				el.hidden = false;
				});  
			}

			// Event for the .Vegetable checkbox
			document.getElementById('.Vegetable').onchange = function() {
				if (this.checked) show('.Vegetable'); else hide('.Vegetable');
			}
			
			// Event for the .Meat checkbox
			document.getElementById('.Meat').onchange = function() {
				if (this.checked) show('.Meat'); else hide('.Meat');
			}

			// Event for the .Frozen Food checkbox
			document.getElementById('.Frozen Food').onchange = function() {
				if (this.checked) show('.Frozen Food'); else hide('.Frozen Food');
			}
		</script>
		
    </body>
</html>