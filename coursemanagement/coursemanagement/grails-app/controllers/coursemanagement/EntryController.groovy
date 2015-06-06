package coursemanagement

class EntryController {

    def index() { }
	
	def beforeInterceptor = [action:this.&auth, except:["index"]]
	
	  def auth() {
		if(!session.user) {
		  redirect(controller:"user", action:"login")
		  return false
		}
	  }
}
