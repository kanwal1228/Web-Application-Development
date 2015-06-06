package coursemanagement

class Enrollment {

    String username;
	String course;
    static constraints = {
		username(blank:true);
		course(blank:true);
    }
}
