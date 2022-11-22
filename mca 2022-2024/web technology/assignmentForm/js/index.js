function onClick10() {
    var dateOfArrival = document.getElementById('date').value ;
    var dateOfDeparture = document.getElementById('depart').value;
    var dateOfArrival10 = new Date(dateOfArrival)
    var dateOfDeparture10 = new Date(dateOfDeparture)
    var differenceMillieSeconds = Math.abs(dateOfArrival10 - dateOfDeparture10)
    var differenceDays = differenceMillieSeconds / (1000 * 60 * 60  * 24)
    // Thousand represent 1 milliseconds, 60 seconds is 1 min, 60 min is 1 hour, 24 hours is a day 
    var complimentaryDish = document.getElementById('menu10').value;
    var noOfRoomsBooked = document.getElementById('noOfRooms').value;
    var gender = document.getElementsByName('gender')
    var iterate0 = 0;
    
    var gender10 = ''
    while (iterate0 < gender.length) {
         if (gender[iterate0].checked == true) {
            gender10 = gender[iterate0].value
         }
         iterate0 += 1
    }
    
    var genderCost = 1000;


    // Cost assignment
    var oneRoom = 1000
    var complimentrayCost = 200

    switch (complimentaryDish) {
        case 'Frankie':
            complimentrayCost = 100
            break;
        case 'Pasta':
            complimentrayCost = 400
            break;
        case 'Pizza':
            complimentrayCost = 500
            break;
        case 'Sandwich':
            complimentrayCost = 600
            break;
        default:
            break;
    }

    switch (gender10) {
        case 'male':
            genderCost = 1500;
            break;
        case 'female':
            genderCost = 1000;
            break;
    
        default:
            break;
    }

    var costForDays = Math.random() * differenceDays * 1000 ;

   
    if (dateOfArrival && dateOfDeparture && complimentaryDish && noOfRoomsBooked && gender10) {
        var totalCost = noOfRoomsBooked * oneRoom + complimentrayCost + genderCost + costForDays
        document.getElementById('message').innerHTML = 'the total cost is , Rs ' + Math.round(totalCost)
    } else {
        alert('Please enter all the inputs')
    }
}