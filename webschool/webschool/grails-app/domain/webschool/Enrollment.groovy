package webschool

class Enrollment {

	String user;
	String course;
    static constraints = {
		user(blank:true);
		course(blank:true);
    }
}
