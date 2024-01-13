$(document).ready(function() {
    $('#getAdminQuery').click(function() {
        $.ajax({
            url: 'getAdmin.php',
            type: 'post',
            data: { action: 'get_data' },
            success: function(response) {
                $('#showAdmin').html(response);
            },
            error: function(error) {
                console.log('Error:', error);
            }
        });
    });
});

$(document).ready(function() {
    $('#roomDetailsQuery').click(function() {
        $.ajax({
            url: 'roomDetails.php',
            type: 'post',
            data: { action: 'get_data' },
            success: function(response) {
                $('#roomDetails').html(response);
            },
            error: function(error) {
                console.log('Error:', error);
            }
        });
    });
});

$(document).ready(function() {
    $('#roomDetailsQuery2').click(function() {
        $.ajax({
            url: 'roomDetails2.php',
            type: 'post',
            data: { action: 'get_data' },
            success: function(response) {
                $('#roomDetails2').html(response);
            },
            error: function(error) {
                console.log('Error:', error);
            }
        });
    });
});

$(document).ready(function() {
    $('#studentPayment').click(function() {
        $.ajax({
            url: 'studentPayment.php',
            type: 'post',
            data: { action: 'get_data' },
            success: function(response) {
                $('#studentPay').html(response);
            },
            error: function(error) {
                console.log('Error:', error);
            }
        });
    });
});

$(document).ready(function() {
    $('#studentOnDorm').click(function() {
        $.ajax({
            url: 'studentOnDorm.php',
            type: 'post',
            data: { action: 'get_data' },
            success: function(response) {
                $('#studentOnDormitory').html(response);
            },
            error: function(error) {
                console.log('Error:', error);
            }
        });
    });
});

$(document).ready(function() {
    $('#studentNumRT').click(function() {
        $.ajax({
            url: 'studentNumRT.php',
            type: 'post',
            data: { action: 'get_data' },
            success: function(response) {
                $('#studentRT').html(response);
            },
            error: function(error) {
                console.log('Error:', error);
            }
        });
    });
});

$(document).ready(function() {
    $('#adminPayment').click(function() {
        $.ajax({
            url: 'adminPayment.php',
            type: 'post',
            data: { action: 'get_data' },
            success: function(response) {
                $('#adminPay').html(response);
            },
            error: function(error) {
                console.log('Error:', error);
            }
        });
    });
});

$(document).ready(function() {
    $('#earningRT').click(function() {
        $.ajax({
            url: 'earnByRT.php',
            type: 'post',
            data: { action: 'get_data' },
            success: function(response) {
                $('#earnRT').html(response);
            },
            error: function(error) {
                console.log('Error:', error);
            }
        });
    });
});