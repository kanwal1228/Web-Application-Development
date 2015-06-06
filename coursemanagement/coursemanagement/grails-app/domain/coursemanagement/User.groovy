package coursemanagement

class User {
	
	String username
	String password
	String name
	
	static hasMany = [enrollments:Enrollment]
	
	String toString()
	{
		name
	}
	
    static constraints = {
		
		username blank: false, unique: true
		password password: false
		name()
    }
}
