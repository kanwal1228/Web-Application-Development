package coursemanagement



import static org.springframework.http.HttpStatus.*
import grails.transaction.Transactional

@Transactional(readOnly = true)
class EnrollmentController {

    static allowedMethods = [save: "POST", update: "PUT", delete: "DELETE"]	
	
	def list() {
		redirect(controller:"Enrollment", action:"index")			
	 }
	

    def index(Integer max) {
        params.max = Math.min(max ?: 10, 100)
        respond Enrollment.list(params), model:[enrollmentInstanceCount: Enrollment.count()]
    }

    def show(Enrollment enrollmentInstance) {
        respond enrollmentInstance
    }

    def create() {
        respond new Enrollment(params)
    }

    @Transactional
    def save(Enrollment enrollmentInstance) {
        if (enrollmentInstance == null) {
            notFound()
            return
        }

        if (enrollmentInstance.hasErrors()) {
            respond enrollmentInstance.errors, view:'create'
            return
        }

        enrollmentInstance.save flush:true

        request.withFormat {
            form multipartForm {
                flash.message = message(code: 'default.created.message', args: [message(code: 'enrollment.label', default: 'Enrollment'), enrollmentInstance.id])
                redirect enrollmentInstance
            }
            '*' { respond enrollmentInstance, [status: CREATED] }
        }
    }

    def edit(Enrollment enrollmentInstance) {
        respond enrollmentInstance
    }

    @Transactional
    def update(Enrollment enrollmentInstance) {
        if (enrollmentInstance == null) {
            notFound()
            return
        }

        if (enrollmentInstance.hasErrors()) {
            respond enrollmentInstance.errors, view:'edit'
            return
        }

        enrollmentInstance.save flush:true

        request.withFormat {
            form multipartForm {
                flash.message = message(code: 'default.updated.message', args: [message(code: 'Enrollment.label', default: 'Enrollment'), enrollmentInstance.id])
                redirect enrollmentInstance
            }
            '*'{ respond enrollmentInstance, [status: OK] }
        }
    }

    @Transactional
    def delete(Enrollment enrollmentInstance) {

        if (enrollmentInstance == null) {
            notFound()
            return
        }

        enrollmentInstance.delete flush:true

        request.withFormat {
            form multipartForm {
                flash.message = message(code: 'default.deleted.message', args: [message(code: 'Enrollment.label', default: 'Enrollment'), enrollmentInstance.id])
                redirect action:"index", method:"GET"
            }
            '*'{ render status: NO_CONTENT }
        }
    }

    protected void notFound() {
        request.withFormat {
            form multipartForm {
                flash.message = message(code: 'default.not.found.message', args: [message(code: 'enrollment.label', default: 'Enrollment'), params.id])
                redirect action: "index", method: "GET"
            }
            '*'{ render status: NOT_FOUND }
        }
    }
}
