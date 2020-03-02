</div>

</div>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.4.1.js"><\/script>')</script>
<script src="<?php bloginfo('stylesheet_directory')?>/js/popper.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory')?>/js/bootstrap.min.js"></script>

<script>
// Holder.addTheme('thumb', {
// 	bg: '#55595c',
// 	fg: '#eceeef',
// 	text: 'Thumbnail'
// });index1.html#collapse2
$(document).ready(function() {
var n=0;
$("#btntclearfilter").hide();
$(".pagination-sm").hide();
JSonObj=[];

$("#btntoggle").click(function() {
var elem = $("#btntoggle").text();
console.log(elem)
if (elem == "Show More") {
//Stuff to do when btn is in the read more state
$("#btntoggle").text("Show Less");
$("#filtermore").slideDown();

} else {
//Stuff to do when checkboxbtn is in the read less state
$("#btntoggle").text("Show More");$(".pagination-sm").hide();
$("#filtermore").slideUp();
}
});
$("#btntogglesource").click(function() {
var elems = $("#btntogglesource").text();
console.log(elems)
if (elems == "Show More") {
//Stuff to do when btn is in the read more state
$("#btntogglesource").text("Show Less");
$("#filtermoresource").slideDown();
$(this)
} else {
//Stuff to do when btn is in the read less state
$("#btntogglesource").text("Show More");
$("#filtermoresource").slideUp();
}

});
$(".checkme").change(function(e) {
if ($(this).is(":checked")) {
$('#ResultFilterTop').append(
'<label   id='+ $(this).attr("id") +' class="btn  btn-info btn-outline-orange close" style="font-size:16px; font-color:black; background-color: #fff;border: 1px solid #ccc;border-radius: 10px;" aria-label="Close">'+ $(this).attr("id") +'  '+'<span class="fa fa-times"></span> </label>' + "  "
);
n=n+1
$("#btntclearfilter").show();
$(".pagination-sm").show();
items={}
items["id"]=$(this).attr("value");
items["filter"]=$(this).attr("id");
JSonObj.push(items);
console.log(JSonObj);

$("#"+$(this).attr("id")).click(function(){
$("#"+$(this).attr("id")).remove();
n=n-1
console.log(n);
if (n===0)   {
$("#btntclearfilter").hide();
$(".pagination-sm").hide();
}
$("#"+$(this).attr("id")).prop('checked',false);
})
}
else {
//remove
$("#"+$(this).attr("id")).remove();
n=n-1
if (n===0)   $("#btntclearfilter").hide();
}
SendtToAWSAPI();
})//end   $(".checkme").change()

$("#btnsearchbykeyboard").click(function(){
items={}
items["id"]=0;
items["search"]=$("#searchcontent").val();
JSonObj.push(items);
//console.log($("#searchcontent").val());
SendtToAWSAPI();
})

$("#btntclearfilter").click(function(e){
$("#searchcontent").val(" ");
JSonObj=[];
$('.btn-info').each(function(index,value){
//  console.log(value);
$(value).remove();
})
$(".checkme").each(function(index,value){
console.log(value);
$(value).prop('checked',false);
})
$("#btntclearfilter").hide();
$(".pagination-sm").hide();
})
});//end $(document).ready function

function SendtToAWSAPI(){
var JsonString=JSON.stringify(JSonObj);
// console.log(JsonString);
console.log(JSonObj);
$.ajax(
{
url:'https://url-apiv1',
headers:{'Content-type':'application/json',
'Access-Control-Allow-Origin':'*'
},
CrossDomain:true,
Type:'POST',
dataType:'application/jSon',
data:JsonString,
Success:function(data){
console.log(data);
},
error: function(data){
console.log("error = "+JSON.stringify(data));
}
})//end $.ajax
}


function toggleChevron(e) {
$(e.target)
.prev('.panel-heading')
.find("i.indicator")
.toggleClass('fa-caret-down fa-caret-right');
}
$('#accordion').on('hidden.bs.collapse', toggleChevron);
$('#accordion').on('shown.bs.collapse', toggleChevron);

</script>
</body>
</html>
