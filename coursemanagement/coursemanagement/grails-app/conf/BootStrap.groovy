import coursemanagement.Course
import coursemanagement.User

class BootStrap {

    def init = { servletContext ->
		
		new User(username:"shireen",password:"shireen",name:"shireen").save()
		new User(username:"kanwal",password:"kanwal",name:"kanwal").save()
		new User(username:"karan",password:"karan",name:"karan").save()
		new User(username:"kunal",password:"kunal",name:"kunal").save()
		new User(username:"admin",password:"admin",name:"shireen").save()
		
		new Course(title:"CS442",creditHrs:3,description:"Mobile Application Development").save()
		new Course(title:"CS542",creditHrs:3,description:"Computer Networks I").save()
		new Course(title:"CS554",creditHrs:3,description:"Cloud Computing").save()
		new Course(title:"ITMD62",creditHrs:3,description:"Web Site App Development").save()
    }
    def destroy = {
    }
}
