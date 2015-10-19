<?php
include('inc/config.php');
$opError = $agree = $fname = $lname = $email = $age = $gender = $zipcode = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(!empty($_POST["fname"])) $fname = $_POST["fname"];
	if(!empty($_POST["lname"])) $lname = $_POST["lname"];
	if(!empty($_POST["email"])) $email = $_POST["email"];
	if(!empty($_POST["age"])) $age = $_POST["age"];
	if(!empty($_POST["gender"])) $gender = $_POST["gender"];
	if(!empty($_POST["zipcode"])) $zipcode = $_POST["zipcode"];
	
	if ($fname =='') {$opError = '<div class="message error">Please enter your first name.</div>';}
	else if ($lname =='') {$opError = '<div class="message error">Please enter your last name.</div>';}
	else if ($email =='') {$opError = '<div class="message error">Please enter your email address.</div>';}
	else if (!is_numeric($zipcode)) {$opError = '<div class="message error">Please enter numeric value.</div>';}
	else {
		$sql = "UPDATE survey SET firstname='".$fname."', lastname='".$lname."', age='".$age."', gender='".$gender."', zipcode='".$zipcode."', email='".$email."', status=1 WHERE identifier='".$identifier."';";
			if (mysql_query($sql)) {	
				header('Location: thanks.php');
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}

}
?>
<?php include('inc/header.php'); ?>
<section class="slideBlock" id="intro">
  <div class="container">
    <h1 class="logo"><img src="<?php echo $siteurl; ?>images/logo.jpg" alt="Starbucks" title="Starbucks"></h1>
    <p>Those are all the questions we have for you today. Thank you again for your time! Below, please provide your first and last name, as well as the email address to which you would like your $5 Starbucks eGift Card sent. We can confirm that your personal information will not be used for marketing purposes.</p>
    <div class="emailForm">
      <form name="emailverify" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="emailForm thanksForm cf">
			<?php echo $opError; ?>
            <input type="text" name="fname" id="fname" class="inputBox" placeholder="Enter your first name" value="<?php echo $fname; ?>">
            <input type="text" name="lname" id="lname" class="inputBox" placeholder="Enter your Last name" value="<?php echo $lname; ?>">
            <select name="age" id="age" class="inputBox">
            	<option value="">Select your age</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
                <option value="32">32</option>
                <option value="33">33</option>
                <option value="34">34</option>
                <option value="35">35</option>
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
                <option value="44">44</option>
                <option value="45">45</option>
                <option value="46">46</option>
                <option value="47">47</option>
                <option value="48">48</option>
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>
                <option value="53">53</option>
                <option value="54">54</option>
                <option value="55">55</option>
                <option value="56">56</option>
                <option value="57">57</option>
                <option value="58">58</option>
                <option value="59">59</option>
                <option value="60">60</option>
                <option value="61">61</option>
                <option value="62">62</option>
                <option value="63">63</option>
                <option value="64">64</option>
                <option value="65">65</option>
                <option value="66">66</option>
                <option value="67">67</option>
                <option value="68">68</option>
                <option value="69">69</option>
                <option value="70">70</option>
                <option value="71">71</option>
                <option value="72">72</option>
                <option value="73">73</option>
                <option value="74">74</option>
                <option value="75">75</option>
                <option value="76">76</option>
                <option value="77">77</option>
                <option value="78">78</option>
                <option value="79">79</option>
                <option value="80">80</option>
                <option value="81">81</option>
                <option value="82">82</option>
                <option value="83">83</option>
                <option value="84">84</option>
                <option value="85">85</option>
                <option value="86">86</option>
                <option value="87">87</option>
                <option value="88">88</option>
                <option value="89">89</option>
                <option value="90">90</option>
                <option value="91">91</option>
                <option value="92">92</option>
                <option value="93">93</option>
                <option value="94">94</option>
                <option value="95">95</option>
                <option value="96">96</option>
                <option value="97">97</option>
                <option value="98">98</option>
                <option value="99">99</option>

            </select>
            <select name="gender" id="gender" class="inputBox">
            	<option value="">Select your gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Prefer not to say">Prefer not to say</option>
            </select>
            <input type="text" name="zipcode" id="zipcode" class="inputBox" placeholder="Enter your zip code" value="<?php echo $zipcode; ?>">
            <input type="email" name="email" id="email" class="inputBox" placeholder="Enter your email address" value="<?php echo $email; ?>">
        </div>
        <input type="submit" value="Continue" name="continue" class="continueBtn introBtn" disabled>
      </form>
    </div>
  </div>
</section>
<?php include('inc/footer.php'); ?>