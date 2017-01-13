<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Green House based autonomous SeedBed Systems</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/bootstrapt1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/bootstrapt1/css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/bootstrapt1/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >Project Nav</a>
            </li>
            <li>
                <a href="#top" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="#papers" onclick = $("#menu-close").click(); >Papers</a>
            </li>
            <li>
                <a href="#reports" onclick = $("#menu-close").click(); >Reports</a>
            </li>
            <li>
                <a href="#stats" onclick = $("#menu-close").click(); >Stats</a>
            </li>
            <li>
                <a href="#about" onclick = $("#menu-close").click(); >About Us</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1 style="color: white">Welcome to our Research Project on</h1>
            <h3 style="color: white">Green House based autonomous SeedBed Systems</h3>
            <br>
            <a href="#Papers" class="btn btn-dark btn-lg">View Papers</a>
        </div>
    </header>

    <!-- About -->
    <section id="papers" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="text-align: left;">
                    <h2>Green House based autonomous SeedBed Systems</h2>
                    <p class="lead">
							<p><strong>Electrical Configuration of Greenhouse Technology based Seedbed Environment</strong></p>
							<p>A Pre-Thesis report submitted to the</p>
							<p>Dept. of Electrical &amp; Electronic Engineering, BRAC University</p>
							<table width="624">
							<tbody>
							<tr>
							<td width="312">
							<p><strong>Instructor:</strong></p>
							<p><strong>Dr. Md. KhalilurRhaman</strong></p>
							<p>Associate Professor</p>
							<p>Department of Computer Science and Engineering</p>
							</td>
							<td width="312">
							<p><strong>Group Members</strong>:</p>
							<p>SHAMSUL AREFIN (10321002)</p>
							<p>AHMED AKTER (11121060)</p>
							<p>GAZI MD.YASIN ARAFAT (1121063)</p>
							<ol>
							<li>ABRAR FAIYAZ(12321078)</li>
							</ol>
							</td>
							</tr>
							</tbody>
							</table>
							<p></p>
							<p>Contents</p>
							<ol>
							<li><a href="#_Toc428753469"> Abstract. 3</a></li>
							<li><a href="#_Toc428753470"> Introduction. 4</a></li>
							<li><a href="#_Toc428753471"> Seed Selection. 5</a></li>
							<li><a href="#_Toc428753472"> Data Analysis: (for BRRI 28 &amp; 29). 7</a></li>
							<li><a href="#_Toc428753473"> Necessary Components: (Ahmed). 8</a></li>
							<li><a href="#_Toc428753474"> Experiment: 8</a></li>
							</ol>
							<p style="padding-left: 60px;"><a href="#_Toc428753475">6.1 Sensors: Ahmed. 8</a></p>
							<p style="padding-left: 60px;"><a href="#_Toc428753476">6.2 Sensors Calibration: Ahmed. 9</a></p>
							<p style="padding-left: 60px;"><a href="#_Toc428753477">6.2.1 Temperature Control &amp; Humidity preservation Circuit: 9</a></p>
							<p style="padding-left: 60px;"><a href="#_Toc428753478">6.2.2 Water Level Detection &amp; Controlling Unit: 14</a></p>
							<p style="padding-left: 60px;"><a href="#_Toc428753479">6.2.3 Ambient Flux Maintenance Circuit: 15</a></p>
							<ol start="7">
							<li><a href="#_Toc428753480"> Result Analysis: Ahmed. 17</a></li>
							<li><a href="#_Toc428753481"> Conclusion. 17</a></li>
							<li><a href="#_Toc428753482"> References: 18</a></li>
							</ol>
							<p>&nbsp;</p>
							<p>&nbsp;</p>
							<h1><a name="_Toc428753469"></a>1. Abstract</h1>
							<p>A seedbed or seedling bed is the local soil environment in which seeds are planted. It is specially designed to grow the seeds in a controlled environment into larger young plants before transplanting them into a garden or field. A seedbed is used to increase the number of seeds to obtain rapid, grouped germination and healthy, well-formed sprouts. We have identified the necessary components of the environment on which the growth or health of a plant relies. The essential components are air temperature, humidity and soil moisture, pH level of soil, sunlight intensity and sunlight hour. We also have studied how these can be crucial for seed germination. From there we have decided to avail these conditions as per plants requirement. We have planned out a system that will supply water to the seedbed by sprinkler. It will also maintain the air temperature, humidity and soil moisture. . The sensors will measure data from the environment and compare them with desired level. If the results are not within the desired level then our system will inform that to its user and take necessary action that would be predetermined command.</p>
							<h1><a name="_Toc428753470"></a>2. Introduction</h1>
							<p>Bangladesh is an agricultural economy based country. Though the major source of GDP of our country is agriculture, hardly any change has been made in the cultivation process of crops. Agriculture has not been modernized except for some hybrid crops invention. We do not even try collaboration between agriculture and technology. That is why we came up with the idea to gradually introduce technology to our agriculture to modernize and maximize crop harvest.</p>
							<p>Quality seed is the main key to achieve good harvest. A seedbed is used to increase the number of seeds to obtain rapid, grouped germination and healthy, well-formed sprouts [1]. If we can provide the ideal environment for any kind of seed it will germinate as healthy young plants which can be implanted later in the crop field to get good harvest. We have identified the necessary components of the environment on which the growth or health of a plant relies. The essential components are air temperature, humidity and soil moisture, pH level of soil, sunlight intensity and sunlight hour. We also have studied how these can be crucial for seed germination. So, we have designed an automated seedbed environment that will ensure the ideal temperature, humidity, soil moisture, pH level of soil and proper sunlight hour and intensity that will help the germination of maximum percentage of seeds as healthy young plant ready to be implanted in the fields. This will increase the production of that crop[2].</p>
							<p>Rice is the main food crop of Bangladesh. That is why we have chosen rice seed to be germinated in our seedbed. To be known about the best environment for highest amount of rice seed to be germinated, we first studied about the kind of rice that we are growing, the season when that particular rice seed grows the most. The temperature, humidity, soil moisture, pH level of soil, duration and intensity of sunlight that is ideal for that kind of rice. From there we have designed an automated seedbed environment to avail these conditions as per plant's requirement. We have planned out a system that will supply water to the seedbed by sprinkler. It will also maintain the air temperature, humidity and soil moisture. . The sensors will measure data from the environment and compare them with optimum level. As it will be a complete system if the results are not within the desired level then our system will inform that to its user and take necessary action that would be predetermined command.</p>
							<h1><a name="_Toc428753471"></a>3. Seed Selection</h1>
							<p>Rice is the staple food of about 135 million people of Bangladesh. It provides nearly 48% of rural employment, about two-third of total calorie supply and about one-half of the total protein intake of an average person in the country. Rice sector contributes one-half of the agricultural GDP and one-sixth of the national income in Bangladesh.</p>
							<p>Almost all of the 13 million farm families of the country grow rice. Rice is grown on about 10.5 million hectares which has remained almost stable over the past three decades. On the other hand, Farmers are most important stakeholders in rice seeds supply chain. It is, therefore, of critical</p>
							<p>Importance that their views and perspectives with regard to availability and accessibility is properly understood by other stakeholders, including government officials, seed producers and dealers. At the same time, if we take soil variation, plant breeding, biotechnology, green quality &amp; nutrition, irrigation &amp; water management in consideration then these are the reasons behind the choosing of Paddy seeds.</p>
							<p>BRRI Dhan 28 and BRRI Dhan 29 life cycle shorter as far as possible by incorporating short duration genes from the three Aus varieties without much reducing the yield status of each of the three high yielding boro varieties. BRRI Dhan 29 was used as recurrent parent produced 50% flowering within 94 to 101 days. They also required highest days to maturity of 131-145 days and produced highest grain yield per plant.Cobb-Douglas production function was</p>
							<p>applied to estimate the specific effects of individual inputs on production of BRRI-28.</p>
							<p>In an analysis seven independent variables such as costs of using human labour,</p>
							<p>seed, manure and fertilizer, insecticide, power tiller, irrigation and farm size were taken into</p>
							<p>account. It was observed that farm size, fertilizer and manure cost, power tiller cost and</p>
							<p>irrigation cost have had significant impact on BRRI-28 rice production. On the other hand</p>
							<p>fertilizer and manure costs, human labour cost and irrigation cost have had significant impact</p>
							<p>on BRRI-29 rice production.At the same time, it is shown in an analysis that cash costs incurred for producing BRRI-28 and BRRI-29 rice</p>
							<p>were Tk. 66543 and Tk. 65335 per hectare, respectively. Again, the estimated non-cash cost</p>
							<p>for producing BRRI-28 and BRRI-29 rice were Tk. 24023 and Tk. 23788 per hectare, respectively.</p>
							<p>Gross return for BRRI-28 was Tk.99974 and that for BRRI-29 was Tk.99985 per hectare. The</p>
							<p>returns over cash cost were found to be Tk. 33440 and TK.34515 for BR-28 and BR-29 rice,</p>
							<p>respectively. Total cost for producing BRRI-28 and BRRI-29 rice were Tk.90557 and Tk. 89132</p>
							<p>per hectare, respectively. Accordingly, per hectare net return for BRRI-29 was Tk.10727 which</p>
							<p>was higher than that of BRRI-28 rice (Tk. 9417). That's the reasons , we choose BRRI-28 &amp; BRRI-29 for our project.</p>
							<p>[A COMPARATIVE ECONOMIC STUDY OF BRRI DHAN-28 AND</p>
							<p>BRRI DHAN-29 RICE PRODUCTION IN SELECTED AREAS OF</p>
							<p>FARIDPUR DISTRICT</p>
							<p>A Thesis</p>
							<p>By</p>
							<p>TANIA ISLAM</p>
							<p>Examination Roll No.: 11 Ag. Econ. (PE) JJ-13 M</p>
							<p>Semester: July-December 2012</p>
							<p>Registration No.: 33509</p>
							<p>Session: 2006-2007]</p>
							<table width="624">
							<tbody>
							<tr>
							<td width="38">
							</td>
							<td width="586">
							</td>
							</tr>
							</tbody>
							</table>
							<h1><a name="_Toc428753472"></a>4. Data Analysis: (for BRRI 28 &amp; 29)</h1>
							<p>As we have chosen brri dhan 28 &amp; 29 as the test crops, we did some study and field research to find out what will be ideal temperature, water level, humidity, light hour, temperature hour for our seeds to grow healthy and strong. We find almost similar data for both of the crops and those are as follows, we found out that both of the crops were non sensitive to light hour but the brri dhan 28 need 22C-30C temperatures and brri dhan 29 need 20C-30C temperature in its surrounding to grow well. Moreover, they have a critical temperature where they stops germinating it is not the high temperature that causes the problem it is rather the low temperature, as we found out brri dhan 28 and 29 stops germinating at 12C and 15C respectively.</p>
							<p>The one thing that is unique about these two crops that, they need relatively less irrigation. That characteristic is very useful in our country as there might be drought, shortage of water supply due to scarcity of electricity or level of water going further down etc. the seedling needs to be submerged under only 5-6cm of water which is really easily manageable.</p>
							<p>The one very essential component of the environment for the crops is humidity. A plant growth is directly affected by humidity as is has great effect on the respiration system of the plant. For better growth of the seedlings we have to maintain a steady level of humidity that is required. For brri dhan 28 we need humidity level at 70% or above and for brri dhan 29 we need humidity level over 80%.</p>
							<p>One of the most important component is the Ph of the soil. It is very sensitive for the plants to get the proper concentration of hydrogen ion in the soil. To get better result from our test crops , we need to maintain the Ph level 6.5-7 for brri dhan 28, and brri dhan 29 need 6.5-7.5 ph level. So we can see that brri dhan 28 need slightly more acidic soil than brri dhan 29.</p>
							<p>These are the most essential components of the environment to get healthy growing seedling in large number. That is why we will enable a complete system that will keep the environment as the crops need it to be. If we can synchronize and calibrate all the system that will manipulate the environment and avail the components at the ideal level to the plants, our system will be a complete care system to grow healthy seedling which is the key to great crops.</p>
							<h1><a name="_Toc428753473"></a>5. Necessary Components: (Ahmed)</h1>
							<p>As we mentioned before, our goal is to develop a greenhouse based seedbed. So we have to integrate all the necessary component of greenhouse and seedbed to our project. So, according to our goal, we choose our necessary components very carefully. The main components for greenhouses are Flooring, Framing, Covering, Ventilation &amp; Air Circulation, Cooling and humidification, Providing Heats, Lights, Controlling System [3]. One the other hand, the main components for seedbeds are soil, water level, Fertilizers &amp; etc. We designed multiple schematic for our greenhouse based seedbed and choose the best &amp; comfortable design for our project experiment based on our countries environment. Next we list down all the necessary sensors &amp; choose the best sensors with minimal price to ensure cost efficiency. Our chosen sensors are temperature, humidity, ambient light, water level, ph level sensors and so on.</p>
							<h1><a name="_Toc428753474"></a>6. Experiment:</h1>
							<h2><a name="_Toc428753475"></a>6.1 Sensors: Ahmed</h2>
							<p>A sensor is a transducer whose purpose is to sense or detect some characteristic of its environments. It detects events or changes in quantities and provides a corresponding output in various forms, generally as an electrical or optical signal. For example, a touch-sensitive elevator buttons, lamps which dim or brighten by touching the base, besides innumerable applications of sensors which most people are never aware of. When we need to sense or detect anything from the environment, there is no other ways to do it without a sensor. As we described above about our greenhouse based seedbed, we know that, germination, photosynthesis and growth rate of a plants depends on various factors like sunlight hour, temperature, humidity, soil moisture, ph. Level &amp; etc. So, we need to get the above environment data to maintain an ideal environment for our seedbed plants. That&rsquo;s why we bought &ldquo;HSM 20G&rdquo; temperature sensor to measure the outside temperature and humidity. But the temperature sensor was affected by various natural difficulties like rain, mist, winds and etc. So, we change the temperature sensor with a new digital &ldquo;DS18B20&rdquo; temperature sensor which is insulated in a closed surface and can measure the temperature in any weather most accurately. Our &ldquo;HSM 20G&rdquo; gives environment data in analog voltage and the &ldquo;DS18B20&rdquo; measures the temperature and give us the data in digital form. So, we calibrate the sensors in such way that our controller can understand and control both data and show us in our regular units. Now the humidity and temperature problem is solved. Next, we started working with sunlight hours. Most of the plants need certain sunlight hours to do proper photosynthesis for their better growth. At the same time sunlight intensity is also necessary cause in cloudy weather, plants can&rsquo;t make their food properly because of poor photosynthesis. We bought Ambient light sensor to calculate the light hour with proper sunlight intensity to ensure healthy plants growth. One of the main components for plants is water in the soil. First we choose Y100 soil moisture sensor to ensure proper water level in the soil. For our paddy seed BRRI 28 &amp; 29, we choose wet method for preparing our seedbed. Because of this, we have to ensure 4 inch to 6 inch of water above the soil level. So we need a water level detector to solve this problem. Available water level detectors in the market are too costly. So we choose a design of water level detector made by some of the Brilliant boys of Brac University. We built the detector according to our needs to ensure 4 inch to 6 inch of water above the soil level.</p>
							<h2><a name="_Toc428753476"></a>6.2 Sensors Calibration: Ahmed</h2>
							<p>Now it&rsquo;s time to calibrate all our sensors for our seedbed according to BRRI 28 and 29 seeds requirements.</p>
							<h3><a name="_Toc428753477"></a>6.2.1 Temperature Control &amp; Humidity preservation Circuit:</h3>
							<p><strong> </strong>For Greenhouse, Temperature is the most important elements. Temperature affects the growth and productivity of plants, depending on whether the plant is a warm season or cool season crop. Within limits, rates of photosynthesis and respiration both rise with increasing temperatures. As temperatures reach the upper growing limits for the crop, the rate of food used by respiration may exceed the rate at which food is manufactured by photosynthesis. At the same time seeds of cool season crops germinate at 4&deg;C to 27&deg;C. Warm season crop seeds germinate at 10&deg;F to 33&deg;C. In the spring, cool soil temperatures are a limiting factor for plant growth. In mid-summer, hot soil temperatures may prohibit seed germination [#<a href="http://www.ext.colostate.edu/mg/gardennotes/143.html">http://www.ext.colostate.edu/mg/gardennotes/143.html</a>]. Now we realize that the temperature is an important factor for our greenhouse based seedbed project. At the first time we select &ldquo;HSM-20G&rdquo; sensor to measure the surrounding temperature. We find the sensor corresponding resistance to the surrounding temperature from the datasheet provided with the sensor. Than we put a 10K ohm R2 resistance in the series and applied voltage divider rules to find the corresponding voltages.</p>
							<p> </p>
							<p>Data Table: HSM-20G Temperature Sensor [Provided with the sensor].</p>
							<table width="637">
							<tbody>
							<tr>
							<td width="142">
							<p><strong>Temperature</strong></p>
							</td>
							<td width="70">
							<p><strong>0</strong></p>
							</td>
							<td width="61">
							<p><strong>10</strong></p>
							</td>
							<td width="61">
							<p><strong>20</strong></p>
							</td>
							<td width="61">
							<p><strong>25</strong></p>
							</td>
							<td width="61">
							<p><strong>30</strong></p>
							</td>
							<td width="61">
							<p><strong>40</strong></p>
							</td>
							<td width="61">
							<p><strong>50</strong></p>
							</td>
							<td width="61">
							<p><strong>60</strong></p>
							</td>
							</tr>
							<tr>
							<td width="142">
							<p><strong>Resistance [R1]</strong></p>
							</td>
							<td width="70">
							<p>163.81</p>
							</td>
							<td width="61">
							<p>97.10</p>
							</td>
							<td width="61">
							<p>59.42</p>
							</td>
							<td width="61">
							<p>47.00</p>
							</td>
							<td width="61">
							<p>37.43</p>
							</td>
							<td width="61">
							<p>24.19</p>
							</td>
							<td width="61">
							<p>16.01</p>
							</td>
							<td width="61">
							<p>10.83</p>
							</td>
							</tr>
							<tr>
							<td width="142">
							<p><strong>Corresponding Voltage [V]</strong></p>
							</td>
							<td width="70">
							<p>0.28</p>
							</td>
							<td width="61">
							<p>0.46</p>
							</td>
							<td width="61">
							<p>0.72</p>
							</td>
							<td width="61">
							<p>0.87</p>
							</td>
							<td width="61">
							<p>1.05</p>
							</td>
							<td width="61">
							<p>1.46</p>
							</td>
							<td width="61">
							<p>1.92</p>
							</td>
							<td width="61">
							<p>2.40</p>
							</td>
							</tr>
							</tbody>
							</table>
							<p>Next we tested some of the data for 25 C, 30 C, 35 C &amp; 40 C. We use another resistance R2 of 10K ohms in series with the sensor and measure the voltage at the sensor end point. We measure the resistance &amp; voltage output for the corresponding temperatures.</p>
							<p>Our measured data listed in the below table.</p>
							<table>
							<tbody>
							<tr>
							<td width="141">
							<p><strong>Temperature (C)</strong></p>
							</td>
							<td width="127">
							<p><strong>25</strong></p>
							</td>
							<td width="127">
							<p><strong>30</strong></p>
							</td>
							<td width="127">
							<p><strong>35</strong></p>
							</td>
							<td width="116">
							<p><strong>40</strong></p>
							</td>
							</tr>
							<tr>
							<td width="141">
							<p><strong>Resistance R1 (K)</strong></p>
							</td>
							<td width="127">
							<p>51.37</p>
							</td>
							<td width="127">
							<p>40.23</p>
							</td>
							<td width="127">
							<p>34.82</p>
							</td>
							<td width="116">
							<p>28.68</p>
							</td>
							</tr>
							<tr>
							<td width="141">
							<p><strong>Output Voltage</strong></p>
							</td>
							<td width="127">
							<p>0.77</p>
							</td>
							<td width="127">
							<p>0.94</p>
							</td>
							<td width="127">
							<p>1.06</p>
							</td>
							<td width="116">
							<p>1.23</p>
							</td>
							</tr>
							</tbody>
							</table>
							<p></p>
							<p><strong>Temperature = - 0.019918 + 1.77231 * voltage</strong></p>
							<p>We already mention that we got some difficulties with our &ldquo;HSM-20G&rdquo; sensor, so we use &ldquo;DS18B20&rdquo; sensor to measure the temperature more accurately. &ldquo;DS18B20&rdquo; has many features over &ldquo;HSM-20G&rdquo;. It provides 9-bit to 12-bit Celsius temperature measurements and has an alarm function with nonvolatile user- programmable upper and lower trigger points. The &ldquo;DS18B20&rdquo; communicates over a 1-Wire bus that by definition requires only one data line (and ground) for communication with a central microprocessor. It has an operating temperature range of -55&deg;C to +125&deg;C and is accurate to &plusmn;0.5&deg;C over the range of -10&deg;C to +85&deg;C. In addition, the &ldquo;DS18B20&rdquo; can derive power directly from the data line (&ldquo;parasite power&rdquo;), eliminating the need for an external power supply. Each DS18B20 has a unique 64-bit serial code, which allows multiple DS18B20 to function on the same 1-Wire bus. Thus, it is simple to use one microprocessor to control many DS18B20 distributed over a large area. Applications that can benefit from this feature include environmental controls, temperature monitoring systems inside buildings, equipment, or machinery, and process monitoring and control Systems. The core functionality of the DS18B20 is its direct-to-digital temperature sensor. The resolution of the temperature sensor is user-configurable to 9, 10, 11, or 12 bits, corresponding to increments of 0.5&deg;C, 0.25&deg;C, 0.125&deg;C, and 0.0625&deg;C, respectively. The default resolution at power-up is 12-bit. The DS18B20 powers up in a low-power idle state. To initiate a temperature measurement and A-to-D conversion, the master issue a convert command. Following the conversion, the resulting thermal data is stored in the 2-byte temperature register in the scratchpad memory and the DS18B20 returns to its idle state. If the DS18B20 is powered by an external supply, the master can issue &ldquo;read time slots&rdquo; after the convert command and the DS18B20 will respond by transmitting 0 while the temperature conversion is in progress and 1 when the conversion is done. The DS18B20 output temperature data is calibrated in degrees Celsius and stored in digital form. When the conversion is done, the stored data pass through the one wire DQ pin. Now we have to convert this digital data to analog degree Celsius form. An arduino library to convert the digital data to analog form was provided with the onewire DS18B20 sensor.</p>
							<p> <strong>Figure: Figure:</strong></p>
							<p> </p>
							<p> <strong>Figure: Figure:</strong></p>
							<p>Finally we started working with the humidity sensor. We connect the HSM-20G sensor according to the figure-5 and the humidity output goes to the arduino analog input pin. 1<sup>st</sup> of all we converted the analog data into voltages. Than we measure the output voltages for the following humidity. We put this humidity vs. voltage in the matlab plot function and got the figure-6 plot which show almost linear curve of voltage rising simultaneously with the humidity increasing. Finally we got an equation to find the surrounding humidity in our regular standards.</p>
							<p>Data Table: HSM-20G Humidity Sensor</p>
							<table>
							<tbody>
							<tr>
							<td width="64">
							<p><strong>Humidity</strong></p>
							</td>
							<td width="64">
							<p><strong>10</strong></p>
							</td>
							<td width="64">
							<p><strong>20</strong></p>
							</td>
							<td width="64">
							<p><strong>30</strong></p>
							</td>
							<td width="64">
							<p><strong>40</strong></p>
							</td>
							<td width="64">
							<p><strong>50</strong></p>
							</td>
							<td width="64">
							<p><strong>60</strong></p>
							</td>
							<td width="64">
							<p><strong>70</strong></p>
							</td>
							<td width="64">
							<p><strong>80</strong></p>
							</td>
							<td width="64">
							<p><strong>90</strong></p>
							</td>
							</tr>
							<tr>
							<td width="64">
							<p><strong>Equivalent Voltage</strong></p>
							</td>
							<td width="64">
							<p>0.74</p>
							</td>
							<td width="64">
							<p>0.95</p>
							</td>
							<td width="64">
							<p>1.31</p>
							</td>
							<td width="64">
							<p>1.68</p>
							</td>
							<td width="64">
							<p>2.02</p>
							</td>
							<td width="64">
							<p>2.37</p>
							</td>
							<td width="64">
							<p>2.69</p>
							</td>
							<td width="64">
							<p>2.99</p>
							</td>
							<td width="64">
							<p>3.19</p>
							</td>
							</tr>
							</tbody>
							</table>
							<p>We put the following data in matlab software and and use the plot and polyfit function to determine the equation to use in our arduino controller.</p>
							<p><strong>HUMIDITY = 0.379167 * Voltage </strong></p>
							<p> </p>
							<p> <strong>Figure:5 Figure: </strong></p>
							<p></p>
							<p>As soon as we done with the temperature and humidity sensor, we calibrated the sensors for BRRI 28 &amp; 29. As we know that the optimal temperature for BRRI 28 &amp; 29 is 20&deg;C to 30&deg;C, we use an incandescent light for heating our greenhouse based seedbed which produces 10 percent of light and 90 percent of heat and an exhaust fan to cool down the seedbed. First of all, we set the seedbed environments highest temperature limit at 30* C and the lowest limit at 20* C in the Arduino Controller Board. if the seedbed temperature fallen below the lowest temperature limit, the Arduino will sent 0 to the channel 1 of the relay board as we used a double active low relay board. The 1<sup>st</sup> relay we connected to a 60 Watt incandescent light with the input voltage of 220 Volts which turns on when channel 1 get 0 input. Again, if the temperature rises so high and cross the upper limit of the seedbed environment, the controller will send 0 to the channel 2 of the relay board which will turn on the exhaust fan to cooling the seedbed environment. Next we worked hard to ensure seedbed humidity around 70% to 80%. Most of the time humidity in our country stays between the above ranges though we used the incandescent light to reduce the humidity while we use a water pump with a sprinkler to increase the humidity by spraying water. We configure our Arduino controller such way that if humidity crosses the 80% level, it will turn on the incandescent lights &amp; the exhaust fans both which we used for the temperature control circuit. Again, if the relative humidity gets lower than 70%, a 12 Volts water pump connected to a relay will turn on. A sprinkler connected to the water pump will spray water in the air until the humidity reach to 80% again.</p>
							<p></p>
							<p></p>
							<h3><a name="_Toc428753478"></a>6.2.2 Water Level Detection &amp; Controlling Unit:</h3>
							<p>As we are decided to use wet method to prepare the seedbed for our seedlings, we have to ensure 4 inch to 6 inch of water above the soil level. So we need a water level detector to maintain the required water level for our seedbed. Common water level detectors are designed for long level detection while we need a short level detector of 1 inch to 6 inch including simple design and low budget. So we managed to build one according to our needs. We know that water is a good conductor of electricity. We use thermistor to sense the temperature difference between the water and the surroundings. We put a thermistor outside to sense the temperature and compare it with the thermistor in the water level detector. We define two level of water. Level A for 100% of water &amp; level B for 60% of water. We put a 1Kohm resistance series with the thermistor and take the output between the middle of the resistor and thermistor. We put all the output to the arduino analog pin A0, A1 &amp; A2. A0 is the output of the outside thermistor.</p>
							<p></p>
							<p><strong> Figure: Figure: </strong></p>
							<p></p>
							<p>Next we used a 12 volts water pump connected to a 4 channel relay board. If the water level goes below the 60%, our arduino controller will turn on the relay connected to the water pump which will supply water in the seedbed until the water level reach to 100%. By implementing this water level controller, we ensured water level between 4 inch to 6 inch always for our BRRI 28 and 29 seedlings.</p>
							<h3><a name="_Toc428753479"></a>6.2.3 Ambient Flux Maintenance Circuit:</h3>
							<p>We know that plants make their own food from carbon dioxide, which they get from the air, with water from the soil. This process is called photosynthesis. To power the process, the plant uses the light energy. Light is one of the main source of energy for plants. So plants growth affected by three characteristics of light. They are quantity, quality and duration of light. Now if we go to our BRRI 28 &amp; 29 seeds, their growth is also affected by these three factors of light. As we are here to ensure the growth of BRRI 28 &amp; 29, we have to ensure good quality &amp; enough quantity of light for required duration of our seeds life in the seedbed. So, to ensure all these factors, we made an Ambient Flux Maintenance Circuit. This circuit will count the seeds lifetime in the seedbed and will also ensure fluorescent lights when sun hides under dark clouds in the stormy weather or in the rainy seasons. Even in the winter seasons when sunlight has the minimal intensity, our circuit will calculate the light intensity and it&rsquo;ll provide extra lights if necessary.</p>
							<p> </p>
							<p> <strong>Figure: Figure:</strong></p>
							<p>First of all we bought a Analog Ambient Light sensor and connected it to pin A0 in our Arduino Uno controller board. Next we measure ambient light voltages in many weather under brightest sunlight to low light, at the moment of sunrise and sunset, the sky covered with light cloud or dark cloud, indoor light, etc. Next we put all the value in a table and compared with daylight flux intensity table under certain condition [<a href="https://en.wikipedia.org/wiki/Daylight">https://en.wikipedia.org/wiki/Daylight</a>].</p>
							<table width="632">
							<tbody>
							<tr>
							<td>
							<p><strong>Daylight</strong></p>
							</td>
							<td>
							<p><strong>Time</strong></p>
							</td>
							<td>
							<p><strong>Flux</strong></p>
							</td>
							<td width="90">
							<p><strong>Voltage</strong></p>
							</td>
							</tr>
							<tr>
							<td>
							<p><strong>Brightest Sunlight </strong></p>
							</td>
							<td>
							<p>Afternoon</p>
							</td>
							<td>
							<p>120000</p>
							</td>
							<td width="90">
							<p>4.34</p>
							</td>
							</tr>
							<tr>
							<td>
							<p><strong>Bright Sunlight</strong></p>
							</td>
							<td>
							<p>Morning</p>
							</td>
							<td>
							<p>110000</p>
							</td>
							<td width="90">
							<p>3.93</p>
							</td>
							</tr>
							<tr>
							<td>
							<p><strong>Normal Cloud + Sunrise + Dawn</strong></p>
							</td>
							<td>
							<p>Morning &amp; Afternoon</p>
							</td>
							<td>
							<p>20000</p>
							</td>
							<td width="90">
							<p>3.1</p>
							</td>
							</tr>
							<tr>
							<td>
							<p><strong>Dark Cloud</strong></p>
							</td>
							<td>
							<p>Morning &amp; Afternoon</p>
							</td>
							<td>
							<p>2000</p>
							</td>
							<td width="90">
							<p>2.3</p>
							</td>
							</tr>
							<tr>
							<td>
							<p><strong>Low Light</strong></p>
							</td>
							<td>
							<p>Indoor</p>
							</td>
							<td>
							<p>200</p>
							</td>
							<td width="90">
							<p>0.8</p>
							</td>
							</tr>
							</tbody>
							</table>
							<p>Finally we set our circuit to fulfill our requirements for the greenhouse based seedbed designed for BRRI 28 &amp; 29. If sun doesn't showed for more than a days, the circuit will turn on the fluorescent lights for the daylight times. It&rsquo;ll also notify the owner about the seedlings lifetimes from day 20 to 25 each day for BRRI 28 and from day 25 to 30 each day for BRRI 29 seeds.</p>
							<h1><a name="_Toc428753480"></a>7. Result Analysis: Ahmed</h1>
							<p>First of all, we&rsquo;ll analysis the Temperature Control &amp; Humidity preservation Circuit. HSM-20G output signal was divided into 1023 level by the arduino system. We convert the signal into voltage level. Using the following equation, our sensors data now calibrated between 0 volts to 5 volts.</p>
							<p>Next the challenges we faced that we couldn&rsquo;t understand the temperature or humidity from the voltage level. So, we collect data in various temperature and humidity level and plot them into MATLAB. After this, we got two generalize formula to convert the voltage level to real life temperature in centigrade and humidity in percentage.</p>
							<p>Another challenge was to convert the digital temperature data of DS18B20 into Celsius form. Onewire.h arduino library by onewire made our work easy.</p>
							<p>Again we faced difficulty to choose the sensor for our water level detector. We choose thermistor for this circuit. The voltage difference between the lower water and top water level was so close, so we use a scalar circuit to make the difference high.</p>
							<h1><a name="_Toc428753481"></a>8. Conclusion</h1>
							<p>We selected this project because the potential revolutionary outcome. The description about our system that has been stated before indicates that if this system can be fully implemented we will get the results that we have thought of. Till now the progress that we have made regarding calibration of our system indicates that our system can ensure any environment as per need. This will surely make life easy for the farmers and it has a promising future as this system can be expanded to much more advanced one by introducing solar power usage. Also we will design the system to detect the necessary soil nutrients, for example, urea, phosphate etc. We are still working on the cost efficiency of our system and hopefully be able to come up with a cost efficient way. We are optimistic to establish this system as an energy efficient commercial product after adding the proposed features.</p>
							<h1><a name="_Toc428753482"></a>9. References:</h1>
							<p>[1]A. S. Basra, &rsquo;Seed quality&rsquo; in &ldquo;<em>Basic mechanisms and agricultural implications&rdquo;</em>. Food Products Press(1995).</p>
							<p>[2] J. Li , and Y. Longping, "Hybrid rice: genetics, breeding, and seed production" in <em>Plant Breeding Reviews, Volume 17</em> ,15-158. (2010):</p>
							<p>[3] K. Olender (<em>2005</em> ),<em>Greenhouses for year-round food and farming</em></p>
							<p>Available FTP: <a href="http://newfarm.rodaleinstitute.org/features/2005/0305/gh1/">http://newfarm.rodaleinstitute.org/features/2005/0305/gh1/</a></p>
							<p><a href="http://htmlg.com/html-editor/" target="_blank">Composed with the free HTML G Editor</a>.</p>	

					
					</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="reports" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Current Status</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Temperature</strong>
                                </h4>
                                <h3><?php echo $projects["0"]["temperature"] . " C"; ?></h3>
                                <a href="#stats" class="btn btn-light">View More ...</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Humidity</strong>
                                </h4>
                                <h3><?php echo $projects["0"]["humidity"] . " %"; ?></h3>
                                <a href="#stats" class="btn btn-light">View More ...</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Light Intensity</strong>
                                </h4>
                                <h3><?php echo $projects["0"]["lightintensity"] . " L"; ?></h3>
                                <a href="#stats" class="btn btn-light">View More ...</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Water Level</strong>
                                </h4>
                                <h3><?php echo $projects["0"]["waterlevel"] . " %"; ?></h3>
                                <a href="#stats" class="btn btn-light">View More ...</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>


    <!-- Portfolio -->
    <section id="stats" class="portfolio">
        <div class="container">
            <div class="row">
                <table cellpadding="0" cellspacing="0" width="100%" class="table">
					<thead style="text-align: center;">
						<tr>
							<th width="15%">
								<b>Date</b>
							</th>
							<th width="10%">
								<b>Temperature</b>
							</th>
							<th width="10%">
								<b>Humidity</b>
							</th>
							<th width="10%">
								<b>Ph Level</b>
							</th>
							<th width="10%">
								<b>Avg Light Intensity</b>
							</th>
							<th width="10%">
								<b>Soil Moisture</b>
							</th>
							<th width="10%">
								<b>Water Level</b>
							</th>
							<th width="10%">
								<b>Current Phase</b>
							</th>
						</tr>
					</thead>
					<tbody style="text-align: left;">
					<?php foreach ($projects as $data):?>
						<tr>
							<td>
								<?php echo $data["timedate"]; ?> 
							</td>
							<td>
								<?php echo $data["temperature"] . " C"; ?> 
							</td>
							<td>
								<?php echo $data["humidity"] . " %"; ?> 
							</td>
							<td>
								<?php echo $data["phlevel"] . " %"; ?> 
							</td>
							<td>
								<?php echo $data["lightintensity"] . " %"; ?> 
							</td>
							<td>
								<?php echo $data["soilmoist"] . " %"; ?> 
							</td>
							<td>
								<?php echo $data["waterlevel"] . " %"; ?> 
							</td>
							<td>
								<?php echo "Day - <b>" . $data["day"] . "</b>"; ?> 
							</td>
						</tr>
					<?php endforeach;?> 
					</tbody>
				</table>
            </div>
            <!-- /.row -->
        </div>
		
        <!-- /.container -->
    </section>
	<hr class="medium">



    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Brac University</strong>
                    </h4>
                    <p>Mohakhali<br>Dhaka, Bangladesh</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> +8801712203145</li>
                        
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; <a href="http://www.aapf.tk/">AA Planetica</a>  2015</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/bootstrapt1/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bootstrapt1/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>
