import coursemanagement.Course
import org.codehaus.groovy.grails.plugins.metadata.GrailsPlugin
import org.codehaus.groovy.grails.web.pages.GroovyPage
import org.codehaus.groovy.grails.web.taglib.*
import org.codehaus.groovy.grails.web.taglib.exceptions.GrailsTagException
import org.springframework.web.util.*
import grails.util.GrailsUtil

class gsp_coursemanagement_courseindex_gsp extends GroovyPage {
public String getGroovyPageFileName() { "/WEB-INF/grails-app/views/course/index.gsp" }
public Object run() {
Writer out = getOut()
Writer expressionOut = getExpressionOut()
registerSitemeshPreprocessMode()
printHtmlPart(0)
printHtmlPart(1)
createTagBody(1, {->
printHtmlPart(2)
invokeTag('captureMeta','sitemesh',6,['gsp_sm_xmlClosingForEmptyTag':(""),'name':("layout"),'content':("mainpage")],-1)
printHtmlPart(2)
invokeTag('set','g',7,['var':("entityName"),'value':(message(code: 'course.label', default: 'Course'))],-1)
printHtmlPart(2)
createTagBody(2, {->
createTagBody(3, {->
invokeTag('message','g',8,['code':("default.list.label"),'args':([entityName])],-1)
})
invokeTag('captureTitle','sitemesh',8,[:],3)
})
invokeTag('wrapTitleTag','sitemesh',8,[:],2)
printHtmlPart(3)
})
invokeTag('captureHead','sitemesh',9,[:],1)
printHtmlPart(3)
createTagBody(1, {->
printHtmlPart(4)
expressionOut.print(createLink(uri: '/'))
printHtmlPart(5)
invokeTag('message','g',13,['code':("default.home.label")],-1)
printHtmlPart(6)
invokeTag('message','g',17,['code':("default.list.label"),'args':([entityName])],-1)
printHtmlPart(7)
if(true && (flash.message)) {
printHtmlPart(8)
expressionOut.print(flash.message)
printHtmlPart(9)
}
printHtmlPart(10)
invokeTag('sortableColumn','g',25,['property':("title"),'title':(message(code: 'course.title.label', default: 'Title'))],-1)
printHtmlPart(11)
invokeTag('sortableColumn','g',27,['property':("creditHrs"),'title':(message(code: 'course.creditHrs.label', default: 'Credit Hrs'))],-1)
printHtmlPart(11)
invokeTag('sortableColumn','g',29,['property':("description"),'title':(message(code: 'course.description.label', default: 'Description'))],-1)
printHtmlPart(12)
loop:{
int i = 0
for( courseInstance in (courseInstanceList) ) {
printHtmlPart(13)
expressionOut.print((i % 2) == 0 ? 'even' : 'odd')
printHtmlPart(14)
expressionOut.print(fieldValue(bean: courseInstance, field: "title"))
printHtmlPart(15)
expressionOut.print(fieldValue(bean: courseInstance, field: "creditHrs"))
printHtmlPart(15)
expressionOut.print(fieldValue(bean: courseInstance, field: "description"))
printHtmlPart(16)
i++
}
}
printHtmlPart(17)
invokeTag('paginate','g',47,['total':(courseInstanceCount ?: 0)],-1)
printHtmlPart(18)
})
invokeTag('captureBody','sitemesh',50,[:],1)
printHtmlPart(19)
}
public static final Map JSP_TAGS = new HashMap()
protected void init() {
	this.jspTags = JSP_TAGS
}
public static final String CONTENT_TYPE = 'text/html;charset=UTF-8'
public static final long LAST_MODIFIED = 1418095430000L
public static final String EXPRESSION_CODEC = 'html'
public static final String STATIC_CODEC = 'none'
public static final String OUT_CODEC = 'html'
public static final String TAGLIB_CODEC = 'none'
}
