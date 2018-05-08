<!-- Including Header -->
<?php
include_once('INCLUDES/header.php');
?>

<div  id="test-page" class="d-none d-md-block">
	<div class="row">
			<!-- TEST HEADER SECTION BEGINS HERE  -->
		
			<div class="row  test-header col-md-12 align-middle" >

				<div class="col-sm-2 test-logo">
					<img src="IMAGES/LOGO.png" alt="" width="100%">
				</div>

				<div class="col-sm-3 align-middle offset-sm-0 test-title d-sm-none d-md-block" >
					
				</div>
				<div class="col-sm-2 offset-sm-2 test-time" >
					<div style="line-height: 6.5vh" class="d-sm-none d-md-block">Time Left: </div><span id="countdowntimer"></span>
				</div>
				<!-- <div class="col-sm-1 offset-sm-2 text-right pause-button" >
					<a href="#">Pause</a>
				</div> -->

			</div>

			<!-- TEST HEADER SECTION ENDS HERE -->


			<!-- MAIN SECTIION BEGINS HERE  -->

			<div class="row test-main col-md-12 p0">
				<!-- QUESTION SECTION BEGINS HERE / LEFT SECTION -->
				<div class="question-section  col-md-8 p0">
					<!-- TEST SECTIONS -->
					<div class="row col-md-12 test-sections">
						<div class="col-md-2 test-section-title" style="font-weight: 700;">Exam Name : </div>
						<div class="col-md-9 ">
							<div>UPSC Preliminary Test Desktop..</div>
						</div>
					</div>

					<!-- QUESTION INFO SECTION -->

					<div class="question-info row col-md-12 ">
						<div class="col-md-3 question-number bold">Question No. 1</div>
						<div class="col-md-3 offset-md-6 marks-info text-right">Marks: 
							<span class="badge badge-success"> +1</span>
							<span class="badge badge-danger"> -0.25</span>
						</div>
						
					</div>


					<!-- QUESTION AREA -->
					<div class="question-area col-md-12 row p0" >
						<!-- <div class="question-left question-box col-md-6">

						</div> -->
						<div class="question-right question-box col-md-6">
							<form action="">
							 	 <p class="question">In questions, find the odd word/ letters/number pair from the given alternatives. </p>
							 	<div class="radio">
								  <label><input type="radio" name="optradio"> Kolkata</label>
								</div>
								<div class="radio">
								  <label><input type="radio" name="optradio"> Vishakhapatnam </label>
								</div>
								<div class="radio">
								  <label><input type="radio" name="optradio" > Bengaluru</label>
								</div> 

								<div class="radio">
								  <label><input type="radio" name="optradio" > Haldia</label>
								</div> 
							 </form>
						</div>
					</div>

					<div class="test-responses col-md-12 row">
						<div class=""><a href="" class="btn mark-for-review">Mark for Review  & Next</a></div>
						
						<div class=""><a href="" class="clear-response btn">Clear Response</a></div>
						
						<div class="col-md-2 offset-md-5 text-right" ><a href="" class="btn save-and-next " >Save & Next</a></div>
					</div>

					<!-- TEST SECTIONS -->
				</div>
				
				<!-- TEST STATUS ECTION BEGINS HERE	 -->
				<div class="test-status col-md-4 p0" >
					<!-- USER DETAILS SECTION -->
					<div class="user-detail row">
						<div class="avatar"><img src="" alt=""></div>
						<div class="user-name">Bhuvan Singh</div>
					</div>
					
					<!-- MARKING SETAILS SECTION -->
					<div class="marking-details col-md-12 p0">
						<ul class="list-inline row">
							<li class="col-md-5 list-inline-item"><span class="badge badge-success">0</span> Answered </li>
							<li class="col-md-6 list-inline-item"><span class="badge badge-marked">0</span> Marked</li>
							<li class="col-md-5 list-inline-item"><span class="badge badge-not-visited ">0</span> Not Visited</li>
							<li class="col-md-6 list-inline-item"><span class="badge badge-danger">0</span> Not Answered</li>
						</ul>
					</div>


					<!-- ACTIVE SECTION DETAILS -->

					<div class="active-section row">
						<div class="col-md-12 test-section-title">Question List : <span>Section Wise</span></div>
					</div>

					<div class="questions-list col-md-12 ">
						<ul class="list-inline  ">
							<div class="section-title">History</div>
							<li class="list-inline-item"><a href="">1</a></li>
							<li class="list-inline-item"><a href="">2</a></li>
							<li class="list-inline-item"><a href="">3</a></li>
							<li class="list-inline-item"><a href="">4</a></li>
							<li class="list-inline-item"><a href="">5</a></li>
							<li class="list-inline-item"><a href="">6</a></li>
							<li class="list-inline-item"><a href="">7</a></li>
							<li class="list-inline-item"><a href="">8</a></li>
							<li class="list-inline-item"><a href="">9</a></li>
							<li class="list-inline-item"><a href="">10</a></li>
							<li class="list-inline-item"><a href="">11</a></li>
							<li class="list-inline-item"><a href="">12</a></li>	
							<li class="list-inline-item"><a href="">13</a></li>
							<li class="list-inline-item"><a href="">14</a></li>
							<li class="list-inline-item"><a href="">15</a></li>
								

						</ul>

						<ul class="list-inline  ">
							<div class="section-title">Geography</div>
							<li class="list-inline-item"><a href="">16</a></li>
							<li class="list-inline-item"><a href="">17</a></li>
							<li class="list-inline-item"><a href="">18</a></li>
							<li class="list-inline-item"><a href="">19</a></li>
							<li class="list-inline-item"><a href="">20</a></li>
							<li class="list-inline-item"><a href="">21</a></li>
							<li class="list-inline-item"><a href="">22</a></li>
							<li class="list-inline-item"><a href="">23</a></li>
							<li class="list-inline-item"><a href="">24</a></li>
							<li class="list-inline-item"><a href="">25</a></li>
							<li class="list-inline-item"><a href="">26</a></li>
							<li class="list-inline-item"><a href="">27</a></li>
							<li class="list-inline-item"><a href="">28</a></li>
							<li class="list-inline-item"><a href="">29</a></li>	
							<li class="list-inline-item"><a href="">30</a></li>
							<li class="list-inline-item"><a href="">31</a></li>
							<li class="list-inline-item"><a href="">32</a></li>
							<li class="list-inline-item"><a href="">33</a></li>
							<li class="list-inline-item"><a href="">34</a></li>	
						</ul>

						<ul class="list-inline  ">
							<div class="section-title">Physics</div>
							<li class="list-inline-item"><a href="">35</a></li>
							<li class="list-inline-item"><a href="">36</a></li>
							<li class="list-inline-item"><a href="">37</a></li>
							<li class="list-inline-item"><a href="">38</a></li>
							<li class="list-inline-item"><a href="">39</a></li>
							<li class="list-inline-item"><a href="">40</a></li>
							<li class="list-inline-item"><a href="">40</a></li>
							<li class="list-inline-item"><a href="">42</a></li>
							<li class="list-inline-item"><a href="">43</a></li>
							<li class="list-inline-item"><a href="">44</a></li>
							<li class="list-inline-item"><a href="">45</a></li>

						</ul>

						<ul class="list-inline  ">
							<div class="section-title">English</div>
							<li class="list-inline-item"><a href="">46</a></li>
							<li class="list-inline-item"><a href="">47</a></li>
							<li class="list-inline-item"><a href="">48</a></li>	
							<li class="list-inline-item"><a href="">49</a></li>
							<li class="list-inline-item"><a href="">50</a></li>
							<li class="list-inline-item"><a href="">51</a></li>
							<li class="list-inline-item"><a href="">52</a></li>
							<li class="list-inline-item"><a href="">53</a></li>	
							<li class="list-inline-item"><a href="">54</a></li>	
							<li class="list-inline-item"><a href="">55</a></li>
							<li class="list-inline-item"><a href="">56</a></li>
							<li class="list-inline-item"><a href="">57</a></li>
							<li class="list-inline-item"><a href="">58</a></li>
							<li class="list-inline-item"><a href="">59</a></li>	
							<li class="list-inline-item"><a href="">60</a></li>
						</ul>
					</div>

					<div class="submit-test col-md-12 row">
						<div class="w-100"><a href="" class="btn submit-test-btn w-100">Submit Test</a></div>
					</div>
				</div>
				
			</div>
			<!-- MAIN SECTION ENDS HERE  -->
		

	</div>
</div>

<div  id="test-page" class="d-sm-none">
	<div class="row">
			<!-- TEST HEADER SECTION BEGINS HERE  -->
		
			<div class="row  test-header col-12 align-middle" >

				<div class="col-2 test-logo">
					<img src="IMAGES/logo.png" alt="" width="100%">
				</div>

				
				<div class="col-2 offset-2 test-time" >
					<div style="line-height: 6.5vh" class="d-sm-none d-md-block"> </div><span id="countdowntimer"></span>
				</div>
				<div class="col-1 offset-3 text-right pause-button" >
					<a href="#">Pause</a>
				</div>

			</div>

			<!-- TEST HEADER SECTION ENDS HERE -->


			<!-- MAIN SECTIION BEGINS HERE  -->

			<div class="row test-main col-md-12 p0">
				<!-- QUESTION SECTION BEGINS HERE / LEFT SECTION -->
				<div class="question-section  col-md-9 p0">
					<!-- TEST SECTIONS -->
					<div class="row col-md-12 test-sections">
						
						<div class="col-md-10 ">
							<ul class="list-inline list-unstyled test-sections-list">
								<li class="list-inline-item section-active"><a href="">Reasoning</a></li>
								<li class="list-inline-item"><a href="">Quantitative Aptitude</a></li>
								<li class="list-inline-item"><a href="">English Language</a></li>
								<li class="list-inline-item"><a href="">General Awareness</a></li>
								<li class="list-inline-item "><a href="">Reasoning</a></li>
								<li class="list-inline-item"><a href="">Quantitative Aptitude</a></li>
								<li class="list-inline-item"><a href="">English Language</a></li>
								<li class="list-inline-item"><a href="">General Awareness</a></li>
							</ul>
						</div>
					</div>

					<!-- QUESTION INFO SECTION -->

					<div class="question-info row col-12 ">
						<div class="col-6 question-number bold">Question No. 1</div>
						<div class="col-6 offset-0 marks-info text-right">Marks: 
							<span class="badge badge-success"> +1</span>
							<span class="badge badge-danger"> -0.25</span>
						</div>
						
					</div>


					<!-- QUESTION AREA -->
					<div class="question-area col-md-12 row p0" >
						<!-- <div class="question-left question-box col-md-6">

						</div> -->
						<div class="question-right question-box col-md-6">
							<form action="">
							 	 <p class="question">In questions, find the odd word/ letters/number pair from the given alternatives. </p>
							 	<div class="radio">
								  <label><input type="radio" name="optradio"> Kolkata</label>
								</div>
								<div class="radio">
								  <label><input type="radio" name="optradio"> Vishakhapatnam </label>
								</div>
								<div class="radio">
								  <label><input type="radio" name="optradio" > Bengaluru</label>
								</div> 

								<div class="radio">
								  <label><input type="radio" name="optradio" > Haldia</label>
								</div> 
							 </form>
						</div>
					</div>

				

					<!-- TEST SECTIONS -->
				</div>
				
				<!-- TEST STATUS ECTION BEGINS HERE	 -->
				<div class="test-status col-md-3 p0" id="test-status-id" >
					<!-- USER DETAILS SECTION -->
					<div class="user-detail row">
						<div class="avatar"><img src="" alt=""></div>
						<div class="user-name">Bhuvan Singh</div>
					</div>
					
					<!-- MARKING SETAILS SECTION -->
					<div class="marking-details col-md-12 p0">
						<ul class="list-inline row">
							<li class="col-md-5 list-inline-item"><span class="badge badge-success">0</span> Answered </li>
							<li class="col-md-6 list-inline-item"><span class="badge badge-marked">0</span> Marked</li>
							<li class="col-md-5 list-inline-item"><span class="badge badge-not-visited ">0</span> Not Visited</li>
							<li class="col-md-6 list-inline-item"><span class="badge badge-danger">0</span> Not Answered</li>
						</ul>
					</div>


					<!-- ACTIVE SECTION DETAILS -->

					<div class="active-section row">
						<div class="col-md-12 test-section-title">SECTIONS : <span>Quantitative Aptitude</span></div>
					</div>

					<div class="questions-list col-md-12 ">
						<ul class="list-inline  ">
							<li class="list-inline-item"><a href="">1</a></li>
							<li class="list-inline-item"><a href="">2</a></li>
							<li class="list-inline-item"><a href="">3</a></li>
							<li class="list-inline-item"><a href="">4</a></li>
							<li class="list-inline-item"><a href="">5</a></li>
							<li class="list-inline-item"><a href="">6</a></li>
							<li class="list-inline-item"><a href="">7</a></li>
							<li class="list-inline-item"><a href="">8</a></li>
							<li class="list-inline-item"><a href="">9</a></li>
							<li class="list-inline-item"><a href="">10</a></li>
							<li class="list-inline-item"><a href="">11</a></li>
							<li class="list-inline-item"><a href="">12</a></li>	
							<li class="list-inline-item"><a href="">13</a></li>
							<li class="list-inline-item"><a href="">14</a></li>
							<li class="list-inline-item"><a href="">15</a></li>
							<li class="list-inline-item"><a href="">16</a></li>
							<li class="list-inline-item"><a href="">17</a></li>
							<li class="list-inline-item"><a href="">18</a></li>
							<li class="list-inline-item"><a href="">19</a></li>
							<li class="list-inline-item"><a href="">20</a></li>
							<li class="list-inline-item"><a href="">21</a></li>
							<li class="list-inline-item"><a href="">22</a></li>
							<li class="list-inline-item"><a href="">23</a></li>
							<li class="list-inline-item"><a href="">24</a></li>
							<li class="list-inline-item"><a href="">25</a></li>
							<li class="list-inline-item"><a href="">26</a></li>
							<li class="list-inline-item"><a href="">27</a></li>
							<li class="list-inline-item"><a href="">28</a></li>
							<li class="list-inline-item"><a href="">29</a></li>	
							<li class="list-inline-item"><a href="">30</a></li>
							<li class="list-inline-item"><a href="">31</a></li>
							<li class="list-inline-item"><a href="">32</a></li>
							<li class="list-inline-item"><a href="">33</a></li>
							<li class="list-inline-item"><a href="">34</a></li>		

						</ul>
						<div class="submit-test col-md-12 row">
						<div class="w-100"><a href="" class="btn submit-test-btn w-100">Submit Test</a></div>
					</div>
					</div>
					
					
				</div>


				
			</div>
			<!-- MAIN SECTION ENDS HERE  -->
		

	</div>

	<div>
		<p class="open-qbox" id="open-qbox-id">&equiv;</p>
		<p class="close-qbox" id="close-qbox-id">&times;</p>
	</div>

	<div class="test-responses col-12 row">
		<div class=""><a href="" class="btn prev-que"> < Prev Que</a></div>
		<div class=""><a href="" class="btn next-que">Next Que ></a></div>
		<div class="" ><a href="" class="btn save-and-next " >Mark</a></div>
		<div class="offset-3"><a href="" class="clear-response btn ">Clear</a></div>
		
		
	</div>
</div>



<!--  -->

<?php
include_once('INCLUDES/footer.php');
?>

