function create(){ 
		var uname = $("#username").val();
		var pword = $("#password").val();
		
		if(uname === "" || !(uname))
		{
			$("#check").html("<span class='red'>Please enter a username</span>");
		}
		
		else if(pword === "" || !(pword))
		{
			$("#check").html("<span class='red'>Please enter a password</span>");
		}
		
		else
		{
			$.ajax({
				type: "POST",
				url: 'create.php',
				data:{ username:uname, password:pword },
				success:function(data)
				{
					if (data != 'correct')
					{
						$("#check").html(data);
					}
					
					else
					{
						window.location.replace('calender.php');
					}
				
				}
				
			}).done(function(data) {
			  //alert("done works");
			  //$("#check").html("TEST");
			});
		
		}
		
		
		
}

function log(){ 
		var uname = $("#username").val();
		var pword = $("#password").val();
		
		if(uname === "" || !(uname))
		{
			$("#check").html("<span class='red'>Please enter a username</span>");
		}
		
		else if(pword === "" || !(pword))
		{
			$("#check").html("<span class='red'>Please enter a password</span>");
		}
		
		else
		{
			$.ajax({
				type: "POST",
				url: 'login.php',
				data:{ username:uname, password:pword },
				success: function(data){
				
						if (data != 'correct')
						{
							$("#check").html(data);
						}
						
						else
						{
							window.location.replace('calender.php');
						}
					
					}
			});
		}
}
