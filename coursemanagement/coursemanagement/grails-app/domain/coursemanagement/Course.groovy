package coursemanagement

class Course {

    String title;
	int creditHrs;
	String description;
    static constraints = {
		
		title(blank:false,unique:true)

    }
}
