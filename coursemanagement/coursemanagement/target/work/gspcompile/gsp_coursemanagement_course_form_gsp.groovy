import coursemanagement.Course
import org.codehaus.groovy.grails.plugins.metadata.GrailsPlugin
import org.codehaus.groovy.grails.web.pages.GroovyPage
import org.codehaus.groovy.grails.web.taglib.*
import org.codehaus.groovy.grails.web.taglib.exceptions.GrailsTagException
import org.springframework.web.util.*
import grails.util.GrailsUtil

class gsp_coursemanagement_course_form_gsp extends GroovyPage {
public String getGroovyPageFileName() { "/WEB-INF/grails-app/views/course/_form.gsp" }
public Object run() {
Writer out = getOut()
Writer expressionOut = getExpressionOut()
registerSitemeshPreprocessMode()
printHtmlPart(0)
expressionOut.print(hasErrors(bean: courseInstance, field: 'title', 'error'))
printHtmlPart(1)
invokeTag('message','g',7,['code':("course.title.label"),'default':("Title")],-1)
printHtmlPart(2)
invokeTag('textField','g',10,['name':("title"),'required':(""),'value':(courseInstance?.title)],-1)
printHtmlPart(3)
expressionOut.print(hasErrors(bean: courseInstance, field: 'creditHrs', 'error'))
printHtmlPart(4)
invokeTag('message','g',16,['code':("course.creditHrs.label"),'default':("Credit Hrs")],-1)
printHtmlPart(2)
invokeTag('field','g',19,['name':("creditHrs"),'type':("number"),'value':(courseInstance.creditHrs),'required':("")],-1)
printHtmlPart(3)
expressionOut.print(hasErrors(bean: courseInstance, field: 'description', 'error'))
printHtmlPart(5)
invokeTag('message','g',25,['code':("course.description.label"),'default':("Description")],-1)
printHtmlPart(2)
invokeTag('textField','g',28,['name':("description"),'required':(""),'value':(courseInstance?.description)],-1)
printHtmlPart(6)
}
public static final Map JSP_TAGS = new HashMap()
protected void init() {
	this.jspTags = JSP_TAGS
}
public static final String CONTENT_TYPE = 'text/html;charset=UTF-8'
public static final long LAST_MODIFIED = 1418041356000L
public static final String EXPRESSION_CODEC = 'html'
public static final String STATIC_CODEC = 'none'
public static final String OUT_CODEC = 'html'
public static final String TAGLIB_CODEC = 'none'
}
