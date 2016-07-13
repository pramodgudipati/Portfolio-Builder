$(document).ready(function() {
 //Projects

 $(".education").hide();
 $(".experiences").hide();
 $(".projects").hide();

 $("form").submit(function(e) {

    var ref = $(this).find("[required]");

    $(ref).each(function(){
        if ( $(this).val() == '' )
        {
            alert("Required field should not be blank.");

            $(this).focus();

            e.preventDefault();
            return false;
        }
    });  return true;
});
 
 $("button.add_proj_btn").on("click", add_proj);
$("button.rem_proj_btn").on("click", remove_proj);

$("button.add_exp_btn").on("click", add_exp);
$("button.rem_exp_btn").on("click", remove_exp);

$("button.add_edu_btn").on("click", add_edu);
$("button.rem_edu_btn").on("click", remove_edu);

});

function remove_proj() {
    if(confirm("Do you really want to delete this project?")){
            var num = $('.proj').length;
    $(this).parents(".proj").remove();
if(num-1 === 0)
    $(".projects>h2").remove();
        }
    }

function add_proj(){
    var num = $('.proj').length;
    var newNum = new Number(num+1),
    newElem = $(this).parents('.proj').clone().attr('id', 'proj' + newNum).on('click', 'button.add_proj_btn', add_proj)
        .on('click', 'button.rem_proj_btn', remove_proj);
    newElem.find('.title_prj').attr('for','ID' + newNum + 'title');
    newElem.find('.input_title').attr('id','ID' + newNum + 'title').val('');

    newElem.find('.skills_prj').attr('for','ID' + newNum + 'skills');
    newElem.find('.input_skills').attr('id','ID' + newNum + 'skills').val('');


    newElem.find('.desc_prj').attr('for','ID' + newNum + 'desc');
    newElem.find('.input_desc').attr('id','ID' + newNum + 'desc').val('');

    newElem.find('.git_prj').attr('for','ID' + newNum + 'git');
    newElem.find('.input_git').attr('id','ID' + newNum + 'git').val('');

//    $('#proj' + num).after(newElem);
   $(this).parents('.proj').after(newElem);
   newElem.find('.title_prj').focus();
//    $('#ID' + newNum + 'title').focus();
}

//Experience
function remove_exp() {
    if(confirm("Do you really want to delete this section?")){
            var num = $('.exp').length;
    $(this).parents(".exp").remove();
if(num-1 === 0)
    $(".experiences>h2").remove();
        }
    }

function add_exp(){
    var num = $('.exp').length;
    var newNum = new Number(num+1),
    newElem = $(this).parents('.exp').clone().attr('id', 'exp' + newNum).on('click', 'button.add_exp_btn', add_exp)
        .on('click', 'button.rem_exp_btn', remove_exp);
    newElem.find('.title_exp').attr('for','ID' + newNum + 'cname');
    newElem.find('.input_cName').attr('id','ID' + newNum + 'cname').val('');

    newElem.find('.role_exp').attr('for','ID' + newNum + 'crole');
    newElem.find('.input_cRole').attr('id','ID' + newNum + 'crole').val('');


    newElem.find('.desc_exp').attr('for','ID' + newNum + 'cdesc');
    newElem.find('.input_cDesc').attr('id','ID' + newNum + 'cdesc').val('');

    newElem.find('.from_exp').attr('for','ID'+ newNum + 'cfrommonth');
    newElem.find('.input_cfrommonth').attr('id','ID'+ newNum + 'cfrommonth').val('');

    newElem.find('.from_exp').attr('for','ID'+ newNum + 'cfromyear');
    newElem.find('.input_cfromyear').attr('id','ID'+ newNum + 'cfromyear').val('');

     newElem.find('.to_exp').attr('for','ID'+ newNum + 'ctomonth');
    newElem.find('.input_ctomonth').attr('id','ID'+ newNum + 'ctomonth').val('');
    
     newElem.find('.to_exp').attr('for','ID'+ newNum + 'ctoyear');
    newElem.find('.input_ctoyear').attr('id','ID'+ newNum + 'ctoyear').val('');

      $(this).parents('.exp').after(newElem);
     newElem.find('.title_exp').focus();
}

//Education
function remove_edu() {
    if(confirm("Do you really want to delete this section?")){
            var num = $('.edu').length;
    $(this).parents(".edu").remove();
if(num-1 === 0)
    $(".education>h2").remove();
        }
    }

function add_edu(){
    var num = $('.edu').length;
    var newNum = new Number(num+1),
    newElem = $(this).parents('.edu').clone().attr('id', 'edu' + newNum).on('click', 'button.add_edu_btn', add_edu)
        .on('click', 'button.rem_edu_btn', remove_edu);
    newElem.find('.degree_edu').attr('for','ID' + newNum + 'edegree');
    newElem.find('.input_edegree').attr('id','ID' + newNum + 'edegree').val('');

    newElem.find('.major_edu').attr('for','ID' + newNum + 'major');
    newElem.find('.input_eduMajor').attr('id','ID' + newNum + 'major').val('');

    newElem.find('.univ_edu').attr('for','ID' + newNum + 'univ');
    newElem.find('.input_eduUniv').attr('id','ID' + newNum + 'univ').val('');

    newElem.find('.from_edu').attr('for','ID'+ newNum + 'efrommonth');
    newElem.find('.input_efrommonth').attr('id','ID'+ newNum + 'efrommonth').val('');

    newElem.find('.from_edu').attr('for','ID'+ newNum + 'efromyear');
    newElem.find('.input_efromyear').attr('id','ID'+ newNum + 'efromyear').val('');

     newElem.find('.to_edu').attr('for','ID'+ newNum + 'etomonth');
    newElem.find('.input_etomonth').attr('id','ID'+ newNum + 'etomonth').val('');
    
     newElem.find('.to_edu').attr('for','ID'+ newNum + 'etoyear');
    newElem.find('.input_etoyear').attr('id','ID'+ newNum + 'etoyear').val('');


      $(this).parents('.edu').after(newElem);
     newElem.find('.input_eduName').focus();
}


