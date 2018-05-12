<?php
    $pagetitle='Current Opportunities | IARA-HR Services';
    $pagedescription='';
    $keyword= '';
    include('include/header.php');
?>

<main>
    <section class="current-opportunities">
        <div class="container">
            <div class="row">
                <h1 class="text-center">Current <span class="color_blue">Opportunities</span></h1>
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Current Opportunities</li>
                    </ol>
                    <div class="hiring-info">
                        <h1>We're Hiring</h1>
                        <div class="row">
                            <div class="col-md-4">
                                <h3>F/A, Investment Banking <br>
                                    Investment Research, Analytics
                                </h3>
                            </div>
                            <div class="col-md-4">
                                <h3>HRO, LPO, Foreign languages <br>
                                    HRO Analytics
                                </h3>
                            </div>
                            <div class="col-md-4">
                                <h3>Consulting, Actuarials <br>
                                    Back Office Operations
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- advanced-search-->
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <form class="advanced-search">
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label class="" for="keyskills">Keyskills, Designation</label>
                                <input type="text" class="form-control" name="keyskills" id="keyskills" placeholder="Enter your areas of expertise" />
                            </div>
                            <div class="form-group col-md-3">
                                <label for="location">Desired Location</label>
                                <input type="text" class="form-control" name="location" id="location" placeholder="Where you wish to work" />
                            </div>
                            <div class="form-group col-md-1 dropdown-form-item">
                                <label for="experience">Experience</label>
                                <select class="form-control">
                                    <option>Select</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="expected-salary">Expected Salary</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <select class="form-control">
                                            <option>Min</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                            <option>13</option>
                                            <option>14</option>
                                            <option>15</option>
                                            <option>16</option>
                                            <option>17</option>
                                            <option>18</option>
                                            <option>19</option>
                                            <option>20</option>
                                            <option>21</option>
                                            <option>22</option>
                                            <option>23</option>
                                            <option>24</option>
                                            <option>25</option>
                                            <option>26</option>
                                            <option>27</option>
                                            <option>28</option>
                                            <option>29</option>
                                            <option>30</option>
                                            <option>31</option>
                                            <option>32</option>
                                            <option>33</option>
                                            <option>34</option>
                                            <option>35</option>
                                            <option>36</option>
                                            <option>37</option>
                                            <option>38</option>
                                            <option>39</option>
                                            <option>40</option>

                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control">
                                            <option>Max</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                            <option>13</option>
                                            <option>14</option>
                                            <option>15</option>
                                            <option>16</option>
                                            <option>17</option>
                                            <option>18</option>
                                            <option>19</option>
                                            <option>20</option>
                                            <option>21</option>
                                            <option>22</option>
                                            <option>23</option>
                                            <option>24</option>
                                            <option>25</option>
                                            <option>26</option>
                                            <option>27</option>
                                            <option>28</option>
                                            <option>29</option>
                                            <option>30</option>
                                            <option>31</option>
                                            <option>32</option>
                                            <option>33</option>
                                            <option>34</option>
                                            <option>35</option>
                                            <option>36</option>
                                            <option>37</option>
                                            <option>38</option>
                                            <option>39</option>
                                            <option>40</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <button class="btn btn-danger" id="advanced-search-submit">Search</button>
                            </div>
                        </div>    
                    </form>
                </div>
                <!-- end-of-advanced-search-->
                <!--  JOBS-->
                <div class="col-lg-8 col-md-8 col-xs-8">
                    <div class="job-wrapper">
                        <h4>Jobs</h4>
                        <h5>(1-15 out of 450)</h5>
                        <div class="job">
                            <a href="#">Senior Manager AML and KYC Solutioning</a>
                            <span class="exp"><img src="assets/images/suitcase.svg" class="" alt=""> 2 yrs.</span>
                            <span class="location"><img src="assets/images/location.svg" alt=""> Delhi, INDIA</span>
                            <p>Hands on experience in presales /solutions/ consulting/ delivery roles. Should have in-depth experie.... <a href="#">read more</a></p>
                        </div>
                        <div class="job">
                            <a href="#">Senior Manager AML and KYC Solutioning</a>
                            <span class="exp"><img src="assets/images/suitcase.svg" class="" alt=""> 2 yrs.</span>
                            <span class="location"><img src="assets/images/location.svg" alt=""> Delhi, INDIA</span>
                            <p>Hands on experience in presales /solutions/ consulting/ delivery roles. Should have in-depth experie.... <a href="#">read more</a></p>
                        </div>
                        <div class="job">
                            <a href="#">Senior Manager AML and KYC Solutioning</a>
                            <span class="exp"><img src="assets/images/suitcase.svg" class="" alt=""> 2 yrs.</span>
                            <span class="location"><img src="assets/images/location.svg" alt=""> Delhi, INDIA</span>
                            <p>Hands on experience in presales /solutions/ consulting/ delivery roles. Should have in-depth experie.... <a href="#">read more</a></p>
                        </div>
                        <div class="job">
                            <a href="#">Senior Manager AML and KYC Solutioning</a>
                            <span class="exp"><img src="assets/images/suitcase.svg" class="" alt=""> 2 yrs.</span>
                            <span class="location"><img src="assets/images/location.svg" alt=""> Delhi, INDIA</span>
                            <p>Hands on experience in presales /solutions/ consulting/ delivery roles. Should have in-depth experie.... <a href="#">read more</a></p>
                        </div>
                        <div class="job">
                            <a href="#">Senior Manager AML and KYC Solutioning</a>
                            <span class="exp"><img src="assets/images/suitcase.svg" class="" alt=""> 2 yrs.</span>
                            <span class="location"><img src="assets/images/location.svg" alt=""> Delhi, INDIA</span>
                            <p>Hands on experience in presales /solutions/ consulting/ delivery roles. Should have in-depth experie.... <a href="#">read more</a></p>
                        </div>
                    </div>
                </div>
                <!-- JOBS -->
                
                <div class="col-lg-4 col-md-4 col-xs-4">
                    <!-- drop-cv-->
                    <div class="drop-cv text-center">
                        <h4>Drop Your CV Here</h4>
                        <p>We will consider your profile for future jobs</p>
                        <button class="btn btn-danger center-block">Submit</button>
                    </div>
                    <!-- end-of-drop-cv-->
                    <!-- jobs-filters-->
                    <div class="jobs-filters">
                        <h3>Jobs By Location</h3>
                        <ul class="list-inline">
                            <li><a href="#">Other National Locations <span class="number">247</span></a></li>
                            <li><a href="#">Hyderabad <span class="number">45</span></a></li>
                            <li><a href="#">Delhi <span class="number">89</span></a></li>
                            <li><a href="#">Punjab <span class="number">145</span></a></li>
                            <li><a href="#">Banglore <span class="number">178</span></a></li>
                            <li><a href="#">Rajkot <span class="number">37</span></a></li>
                            <li><a href="#">Noida <span class="number">2</span></a></li>
                        </ul>
                    </div>
                    
                    <div class="jobs-filters">
                        <h3>Jobs By Role</h3>
                        <ul class="list-inline">
                            <li><a href="#">Assistant Manager/ Manager <span class="number">247</span></a></li>
                            <li><a href="#">Associate/ Senior Associate <span class="number">45</span></a></li>
                            <li><a href="#">Team Leader <span class="number">89</span></a></li>
                            <li><a href="#">Analytics Manager <span class="number">145</span></a></li>
                            <li><a href="#">.NET Developer <span class="number">178</span></a></li>
                            <li><a href="#">SEO Specialist <span class="number">37</span></a></li>
                            <li><a href="#">Tester <span class="number">2</span></a></li>
                        </ul>
                    </div>
                    <!-- end-of-jobs-filters-->
                </div>
                
            </div>
        </div>
    </section>
</main>

<?php
    include('include/footer.php');
?>