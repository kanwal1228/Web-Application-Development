package coursemanagement

class LoginTagLib {
    //static defaultEncodeAs = [taglib:'html']
    //static encodeAsForTags = [tagName: [taglib:'html'], otherTagName: [taglib:'none']]
	
	def loginControl = {
		if(session.user){
		  out << "Hello ${session.user.name} "
		  //out << """[${link(action:"logout", controller:"user"){"Logout"}}]"""
		  out << g.link(controller:"user", action:"logout") { "Logout" }
    } else {
		out << g.link(controller:"user", action:"login") { "Login" }
		out <<  '-OR-'
		out << g.link(controller:"user", action:"create") { "Create Login" }
      //out << "[${link(action:"login", controller:"user"){"Login"}}]"   
		}
	}
}
