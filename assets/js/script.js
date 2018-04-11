var system_key = 'jareportaltoken';

var SaveLocal = function(token){
	localStorage.setItem(system_key, token);
}

var SaveSession = function(token){
	sessionStorage.setItem(system_key, token);
}

var GetLocal = function(){
	return localStorage.getItem(system_key) || undefined;

}

var GetSession = function(){
	return sessionStorage.getItem(system_key) || undefined;
}

var LoginPageCheck = function(){
	if(GetLocal()){
        location.href = 'admin_addjob.html';
    }
}

var AdminPageCheck = function(){
	if(!GetLocal()){
        location.href = 'login.html';
    }
}

var GetRadioValue = function(name){
	return parseInt($('input[name="' + name + '"]:checked').val());
}

var SetRadioValue = function(self){
	self.newJob_form.full_time = GetRadioValue('full_time');
    self.newJob_form.accepts_fresh_grad = GetRadioValue('accepts_fresh_grad');
    self.newJob_form.accepts_ojt = GetRadioValue('accepts_ojt');
    self.newJob_form.urgent = GetRadioValue('urgent');
}

function sticky_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('#sticky-anchor').offset().top;
    if (window_top > div_top) {
        $('#sticky-left').addClass('stick');
        $('#sticky-right').addClass('stick');
        $('#sticky-middle').addClass('stick');
        $('#sticky-anchor').height($('#sticky-left').outerHeight());
        $('#sticky-anchor').height($('#sticky-right').outerHeight());
        $('#sticky-anchor').height($('#sticky-middle').outerHeight());
    } else {
        $('#sticky-left').removeClass('stick');
        $('#sticky-right').removeClass('stick');
        $('#sticky-middle').removeClass('stick');
        $('#sticky-anchor').height(0);
    }
}

$(function() {
    $(window).scroll(sticky_relocate);
    sticky_relocate();
});






