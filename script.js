var timoutWarning = 6000; 
    var timoutNow = 9000; 
    var logoutUrl = 'logout.php?session_expired=1'; 
    var warningTimer;
    var timeoutTimer; 
    // Start timers.
    function StartTimers()
    {
        warningTimer = setTimeout("IdleWarning()", timoutWarning);
        timeoutTimer = setTimeout("IdleTimeout()", timoutNow);
    }
    // Reset timers.
    function ResetTimers() 
    { 
        console.log('reset');
        clearTimeout(warningTimer); 
        clearTimeout(timeoutTimer);
        StartTimers();
        $('#idle_warning').hide();
    }
 
    // Show idle timeout warning dialog.
    function IdleWarning() 
    {
        $('#idle_warning').show(); 
    }
 
    // Logout the user.
    function IdleTimeout() 
    {
        window.location = logoutUrl;
        $('#idle_warning').show(); 
    }
    /*---Code ends for checking if no activity, then display an alert on web page ----*/   
 
    $(document).ready(function()
    {
        StartTimers();
        $(document).on('mousemove scroll keyup keypress mousedown mouseup mouseover',function(){
        ResetTimers();
        });
    });
 
    $(window).on('load',function()
    {
        
        $(window).on('mousemove scroll keyup keypress mousedown mouseup mouseover',function(){
        ResetTimers();
        });
        
    });