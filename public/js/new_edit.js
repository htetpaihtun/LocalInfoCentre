function locale_new(){
    		document.getElementById("display-dashboard").hidden=true;
    		document.getElementById("dummy_p").innerHTML=`
    		<form >
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input class="form-control" id="exampleFormControlInput1" placeholder="Name of the place">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description For The Place</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
  </div>

      <div class="form-group">
    <label for="exampleFormControlFile1">Images</label>
    <input type="file" class="form-control-file btn btn-secondary" id="exampleFormControlFile1" multiple>
  </div>

    <button type="submit" class="btn btn-primary">Create New</button>

</form>
    		`;


    	}
    	function restaurant_new(){
    		document.getElementById("display-dashboard").hidden=true;
    		document.getElementById("dummy_p").innerHTML=`<form >
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input class="form-control" id="exampleFormControlInput1" placeholder="Name of the restaurant">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Phone</label>
    <input class="form-control" id="exampleFormControlInput2" placeholder="+95 ">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput3">Email</label>
    <input class="form-control" id="exampleFormControlInput3" placeholder="restaurant@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput4">Address</label>
    <input class="form-control" id="exampleFormControlInput4" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput5">Location</label>
    <input class="form-control" id="exampleFormControlInput5" placeholder="Location ID/Name">
  </div>
  <div class="form-row form-group">
    <div class="col">
      <input type="text" class="form-control" placeholder="Business Hours">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Business Days">
    </div>
  </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Number of tables</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>


    <button type="submit" class="btn btn-primary">Create New</button>

</form>`
}
function hotel_new(){document.getElementById("display-dashboard").hidden=true;
    		document.getElementById("dummy_p").innerHTML=`<form >
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input class="form-control" id="exampleFormControlInput1" placeholder="Name of the hotel">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Phone</label>
    <input class="form-control" id="exampleFormControlInput2" placeholder="+95 ">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput3">Email</label>
    <input class="form-control" id="exampleFormControlInput3" placeholder="restaurant@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput4">Address</label>

    <input class="form-control" id="exampleFormControlInput4" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput5">Location</label>
    <input class="form-control" id="exampleFormControlInput5" placeholder="Location ID/Name">
  </div>
  <div class="form-row form-group">
    <div class="col">
      <input type="text" class="form-control" placeholder="Business Hours">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Business Days">
    </div>
  </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Number of rooms</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>


    <button type="submit" class="btn btn-primary">Create New</button>

</form>`

}

  function tour_new(){
  	document.getElementById("display-dashboard").hidden=true;
    document.getElementById("dummy_p").innerHTML=
  	`<form >
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input class="form-control" id="exampleFormControlInput1" placeholder="Name of the Touring Company">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Phone</label>
    <input class="form-control" id="exampleFormControlInput2" placeholder="+95 ">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput3">Email</label>
    <input class="form-control" id="exampleFormControlInput3" placeholder="restaurant@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput4">Address</label>
    <input class="form-control" id="exampleFormControlInput4" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput5">Location</label>
    <input class="form-control" id="exampleFormControlInput5" placeholder="Location ID/Name">
  </div>

    <button type="submit" class="btn btn-primary">Create New</button>

</form>`
  }

  function news_new(){
  	document.getElementById("display-dashboard").hidden=true;
    document.getElementById("dummy_p").innerHTML=
  	`<form >
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input class="form-control" id="exampleFormControlInput1" placeholder="Title for the article">
  </div>

  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Summary for the article</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea2">Full description for the article</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput5">Location</label>
    <input class="form-control" id="exampleFormControlInput5" placeholder="Location ID/Name">
  </div>
      <div class="form-group">
    <label for="exampleFormControlFile1">Images</label>
    <input type="file" class="form-control-file btn btn-secondary" id="exampleFormControlFile1" multiple>
  </div>


    <button type="submit" class="btn btn-primary">Create New</button>

</form>`;
  }

  function weather_new(){
  	document.getElementById("display-dashboard").hidden=true;
    document.getElementById("dummy_p").innerHTML=`<form >

  <div class="form-group">
    <label for="exampleFormControlTextarea2">Weather</label>
    <textarea class="form-control" id="exampleFormControlTextarea2" rows="4"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput4">Location</label>
    <input class="form-control" id="exampleFormControlInput5" placeholder="Location ID/Name">
  </div>



    <button type="submit" class="btn btn-primary">Create New</button>

</form>`;
  }
  function trendings_new(){
  	document.getElementById("display-dashboard").hidden=true;
    document.getElementById("dummy_p").innerHTML=`<form >

  <div class="form-group">
    <label for="exampleFormControlTextarea2">Trendings</label>
    <textarea class="form-control" id="exampleFormControlTextarea2" rows="4"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput4">Location</label>
    <input class="form-control" id="exampleFormControlInput5" placeholder="Location ID/Name">
  </div>
      <div class="form-group">
    <label for="exampleFormControlFile1">Images</label>
    <input type="file" class="form-control-file btn btn-secondary" id="exampleFormControlFile1" multiple>
  </div>


    <button type="submit" class="btn btn-primary">Create New</button>

</form>`;
  }
  function history_new(){
  	document.getElementById("display-dashboard").hidden=true;
    document.getElementById("dummy_p").innerHTML=`
    <form >
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input class="form-control" id="exampleFormControlInput1" placeholder="History">
  </div>

  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Summary</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea2">Full history</label>
    <textarea class="form-control" id="exampleFormControlTextarea2" rows="4"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput4">Location</label>
    <input class="form-control" id="exampleFormControlInput5" placeholder="Location ID/Name">
  </div>
      <div class="form-group">
    <label for="exampleFormControlFile1">Images</label>
    <input type="file" class="form-control-file btn btn-secondary" id="exampleFormControlFile1" multiple>
  </div>


    <button type="submit" class="btn btn-primary">Create New</button>

</form>`;
  }
  function contacts_new(){
  	document.getElementById("display-dashboard").hidden=true;
    document.getElementById("dummy_p").innerHTML=`<form >
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input class="form-control" id="exampleFormControlInput1" placeholder="Important contact">
  </div>

  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Phone Numbers</label>
    <input class="form-control" id="exampleFormControlInput1" placeholder="+95 ">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput3">Address</label>
    <input class="form-control" id="exampleFormControlInput3" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput4">Location</label>
    <input class="form-control" id="exampleFormControlInput5" placeholder="Location ID/Name">
  </div>



    <button type="submit" class="btn btn-primary">Create New</button>

</form>`;
  }

    	function locale_edit(){
    		document.getElementById("display-dashboard").hidden=true;
    		document.getElementById("dummy_p").innerHTML=`
    		<div class="form-group has-search">
  <span class="fa fa-search form-control-feedback"></span>
  <input type="text" class="form-control" placeholder="Search in locale">
</div>
    		<form >
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input class="form-control" id="exampleFormControlInput1" placeholder="Name of the place" value="Yangon ">
  </div>

  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description For The Place</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10">Yangon</textarea>
  </div>

      <div class="form-group">
    <label for="exampleFormControlTextarea2">Images</label>
    <textarea class="form-control" id="exampleFormControlTextarea2" rows="4">
      image1.jpg
      image2.jpg
      image3.jpg
    </textarea>
  </div>

    <button type="submit" class="btn btn-primary">Confirm edit</button>
    <button type="submit" class="btn btn-danger">Delete entry</button>
</form>
    		`;


    	}
    	function restaurant_edit(){
    		document.getElementById("display-dashboard").hidden=true;
    		document.getElementById("dummy_p").innerHTML=`
    			<div class="form-group has-search">
  <span class="fa fa-search form-control-feedback"></span>
  <input type="text" class="form-control" placeholder="Search in restaurants">
</div>
    		<form >
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input class="form-control" id="exampleFormControlInput1" placeholder="Name of the restaurant" value="Yangon Restaurant">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Phone</label>
    <input class="form-control" id="exampleFormControlInput2" placeholder="+95" value="+95 9123234123, +95 945678987654">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput3">Email</label>
    <input class="form-control" id="exampleFormControlInput3" placeholder="restaurant@example.com" value="ygnrestaurant@pm.me" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput4">Address</label>
    <input class="form-control" id="exampleFormControlInput4" placeholder="" value="Yangon">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput5">Location</label>
    <input class="form-control" id="exampleFormControlInput5" placeholder="Location ID/Name" value="Yangon">
  </div>
  <div class="form-row form-group">
    <div class="col">
      <input type="text" class="form-control" placeholder="Business Hours" value="9-18">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Business Days" value="mon-sun">
    </div>
  </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Number of tables</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">4x9, 10x3</textarea>
  </div>


    <button type="submit" class="btn btn-primary">Confirm edit</button>
    <button type="submit" class="btn btn-danger">Delete entry</button>

</form>`
}
function hotel_edit(){document.getElementById("display-dashboard").hidden=true;
    		document.getElementById("dummy_p").innerHTML=`
<div class="form-group has-search">
  <span class="fa fa-search form-control-feedback"></span>
  <input type="text" class="form-control" placeholder="Search in hotels">
</div>
    		<form >
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input class="form-control" id="exampleFormControlInput1" placeholder="Name of the hotel" value="Yangon Hotel">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Phone</label>
    <input class="form-control" id="exampleFormControlInput2" placeholder="+95 " values="+959 123141353, +9594567876">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput3" ">Email</label>
    <input class="form-control" id="exampleFormControlInput3" placeholder="restaurant@example.com value="ygnhotel@gmail.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput4">Address</label>

    <input class="form-control" id="exampleFormControlInput4" placeholder="" value="Yangon">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput5">Location</label>
    <input class="form-control" id="exampleFormControlInput5" placeholder="Location ID/Name" value="Yangon">
  </div>
  <div class="form-row form-group">
    <div class="col">
      <input type="text" class="form-control" placeholder="Business Hours" value="7-23">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Business Days" value="mon-sun">
    </div>
  </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Number of rooms</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">
    2x10,
    4x5,
    8x4
    </textarea>
  </div>


    <button type="submit" class="btn btn-primary">Create New</button>
    <button type="submit" class="btn btn-danger">Delete entry</button>
</form>`

}

  function tour_edit(){
  	document.getElementById("display-dashboard").hidden=true;
    document.getElementById("dummy_p").innerHTML=
  	`
  	<div class="form-group has-search">
  <span class="fa fa-search form-control-feedback"></span>
  <input type="text" class="form-control" placeholder="Search in touring company">
</div><form >
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input class="form-control" id="exampleFormControlInput1" placeholder="Name of the Touring Company" value="YGN touring company">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Phone</label>
    <input class="form-control" id="exampleFormControlInput2" placeholder="+95 " value="+959 32456754">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput3" >Email</label>
    <input class="form-control" id="exampleFormControlInput3" placeholder="restaurant@example.com" value="ygntour@gmail.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput4">Address</label>
    <input class="form-control" id="exampleFormControlInput4" placeholder="" value="Yangon">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput5">Location</label>
    <input class="form-control" id="exampleFormControlInput5" placeholder="Location ID/Name" value="Yangon">
  </div>

    <button type="submit" class="btn btn-primary">Create New</button>
    <button type="submit" class="btn btn-danger">Delete entry</button>
</form>`
  }

  function news_edit(){
  	document.getElementById("display-dashboard").hidden=true;
    document.getElementById("dummy_p").innerHTML=
  	`
<div class="form-group has-search">
  <span class="fa fa-search form-control-feedback"></span>
  <input type="text" class="form-control" placeholder="Search in news">
</div>
  	<form >
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input class="form-control" id="exampleFormControlInput1" placeholder="Title for the article" value="Yangon news">
  </div>

  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1" >Summary for the article</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4">News in yangon</textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea2">Full description for the article</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6">News in yangon(full)</textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput5">Location</label>
    <input class="form-control" id="exampleFormControlInput5" placeholder="Location ID/Name" value="Yangon">
  </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea2">Images</label>
    <textarea class="form-control" id="exampleFormControlTextarea2" rows="4">
      image1.jpg
      image2.jpg
      image3.jpg
    </textarea>
  </div>


    <button type="submit" class="btn btn-primary">Create New</button>
    <button type="submit" class="btn btn-danger">Delete entry</button>
</form>`;
  }

  function weather_edit(){
  	document.getElementById("display-dashboard").hidden=true;
    document.getElementById("dummy_p").innerHTML=`<div class="form-group has-search">
  <span class="fa fa-search form-control-feedback"></span>
  <input type="text" class="form-control" placeholder="Search in weather">
</div><form >

  <div class="form-group">
    <label for="exampleFormControlTextarea2">Weather</label>
    <textarea class="form-control" id="exampleFormControlTextarea2" rows="4">Sunny</textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput4">Location</label>
    <input class="form-control" id="exampleFormControlInput5" placeholder="Location ID/Name" value="Yangon">
  </div>



    <button type="submit" class="btn btn-primary">Create New</button>
    <button type="submit" class="btn btn-danger">Delete entry</button>
</form>`;
  }
  function trendings_edit(){
  	document.getElementById("display-dashboard").hidden=true;
    document.getElementById("dummy_p").innerHTML=`
<div class="form-group has-search">
  <span class="fa fa-search form-control-feedback"></span>
  <input type="text" class="form-control" placeholder="Search in trendings">
</div>
    <form >

  <div class="form-group">
    <label for="exampleFormControlTextarea2">Trendings</label>
    <textarea class="form-control" id="exampleFormControlTextarea2" rows="4">YGN Trendings</textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput4">Location</label>
    <input class="form-control" id="exampleFormControlInput5" placeholder="Location ID/Name" value="Yangon">
  </div>
      <div class="form-group">
    <label for="exampleFormControlTextarea2">Images</label>
    <textarea class="form-control" id="exampleFormControlTextarea2" rows="4">
      image1.jpg
      image2.jpg
      image3.jpg
    </textarea>
  </div>


    <button type="submit" class="btn btn-primary">Create New</button>
    <button type="submit" class="btn btn-danger">Delete entry</button>
</form>`;
  }
  function history_edit(){
  	document.getElementById("display-dashboard").hidden=true;
    document.getElementById("dummy_p").innerHTML=`<div class="form-group has-search">
  <span class="fa fa-search form-control-feedback"></span>
  <input type="text" class="form-control" placeholder="Search in history">
</div>
    <form >
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input class="form-control" id="exampleFormControlInput1" placeholder="History" value="History">
  </div>

  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Summary</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4">History</textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea2">Full history</label>
    <textarea class="form-control" id="exampleFormControlTextarea2" rows="4">History(full)</textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput4">Location</label>
    <input class="form-control" id="exampleFormControlInput5" placeholder="Location ID/Name" value="Yangon">
  </div>
     <div class="form-group">
    <label for="exampleFormControlTextarea2">Images</label>
    <textarea class="form-control" id="exampleFormControlTextarea2" rows="4">
      image1.jpg
      image2.jpg
      image3.jpg
    </textarea>
  </div>


    <button type="submit" class="btn btn-primary">Create New</button>
    <button type="submit" class="btn btn-danger">Delete entry</button>
</form>`;
  }

  function contacts_edit(){
  	document.getElementById("display-dashboard").hidden=true;
    document.getElementById("dummy_p").innerHTML=`<div class="form-group has-search">
  <span class="fa fa-search form-control-feedback"></span>
  <input type="text" class="form-control" placeholder="Search in contacts">
</div><form >
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input class="form-control" id="exampleFormControlInput1" placeholder="Important contact" value="Police">
  </div>

  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4">Police dept;</textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Phone Numbers</label>
    <input class="form-control" id="exampleFormControlInput1" placeholder="+95 " value="199, +959 23456343242">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput3">Address</label>
    <input class="form-control" id="exampleFormControlInput3" placeholder="" value="Yangon">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput4">Location</label>
    <input class="form-control" id="exampleFormControlInput5" placeholder="Location ID/Name" value="Yangon">
  </div>



    <button type="submit" class="btn btn-primary">Create New</button>
    <button type="submit" class="btn btn-danger">Delete entry</button>
</form>`;
  }
  function showDashboard(){
    document.getElementById("display-dashboard").hidden=false;
    document.getElementById("dummy_p").innerHTML=
    `<div class="container">
  <div class="row">
    <div class="col-sm local size">
      Locale entries : 20
    </div>
    <div class="col-sm news size">
      News entries : 50
    </div>
    <div class="col-sm trendings size">
      Trending entries : 40
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm restaurant size">
      Restaurant entries : 20
    </div>
    <div class="col-sm hotel size">
      Hotel entries : 20
    </div>
    <div class="col-sm touring size">
      Tour entries : 20
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm weather size">
      Weather entries : 20
    </div>
    <div class="col-sm contacts size">
      Contacts entries : 20
    </div>
    <div class="col-sm history size">
      History entries : 20
    </div>
  </div>
</div>`;
  }
