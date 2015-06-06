import coursemanagement.User
import org.codehaus.groovy.grails.plugins.metadata.GrailsPlugin
import org.codehaus.groovy.grails.web.pages.GroovyPage
import org.codehaus.groovy.grails.web.taglib.*
import org.codehaus.groovy.grails.web.taglib.exceptions.GrailsTagException
import org.springframework.web.util.*
import grails.util.GrailsUtil

class gsp_coursemanagement_usershow_gsp extends GroovyPage {
public String getGroovyPageFileName() { "/WEB-INF/grails-app/views/user/show.gsp" }
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
invokeTag('set','g',7,['var':("entityName"),'value':(message(code: 'user.label', default: 'User'))],-1)
printHtmlPart(2)
createTagBody(2, {->
createTagBody(3, {->
invokeTag('message','g',8,['code':("default.show.label"),'args':([entityName])],-1)
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
invokeTag('message','g',17,['code':("default.show.label"),'args':([entityName])],-1)
printHtmlPart(7)
if(true && (flash.message)) {
printHtmlPart(8)
expressionOut.print(flash.message)
printHtmlPart(9)
}
printHtmlPart(10)
if(true && (userInstance?.username)) {
printHtmlPart(11)
invokeTag('message','g',25,['code':("user.username.label"),'default':("Username")],-1)
printHtmlPart(12)
invokeTag('fieldValue','g',27,['bean':(userInstance),'field':("username")],-1)
printHtmlPart(13)
}
printHtmlPart(14)
if(true && (userInstance?.password)) {
printHtmlPart(15)
invokeTag('message','g',34,['code':("user.password.label"),'default':("Password")],-1)
printHtmlPart(16)
invokeTag('fieldValue','g',36,['bean':(userInstance),'field':("password")],-1)
printHtmlPart(13)
}
printHtmlPart(14)
if(true && (userInstance?.name)) {
printHtmlPart(17)
invokeTag('message','g',43,['code':("user.name.label"),'default':("Name")],-1)
printHtmlPart(18)
invokeTag('fieldValue','g',45,['bean':(userInstance),'field':("name")],-1)
printHtmlPart(13)
}
printHtmlPart(19)
createTagBody(2, {->
printHtmlPart(20)
createTagBody(3, {->
invokeTag('message','g',53,['code':("default.button.edit.label"),'default':("Edit")],-1)
})
invokeTag('link','g',53,['class':("edit"),'action':("edit"),'resource':(userInstance)],3)
printHtmlPart(21)
invokeTag('actionSubmit','g',54,['class':("delete"),'action':("delete"),'value':(message(code: 'default.button.delete.label', default: 'Delete')),'onclick':("return confirm('${message(code: 'default.button.delete.confirm.message', default: 'Are you sure?')}');")],-1)
printHtmlPart(22)
})
invokeTag('form','g',56,['url':([resource:userInstance, action:'delete']),'method':("DELETE")],2)
printHtmlPart(23)
})
invokeTag('captureBody','sitemesh',58,[:],1)
printHtmlPart(24)
}
public static final Map JSP_TAGS = new HashMap()
protected void init() {
	this.jspTags = JSP_TAGS
}
public static final String CONTENT_TYPE = 'text/html;charset=UTF-8'
public static final long LAST_MODIFIED = 1418100142000L
public static final String EXPRESSION_CODEC = 'html'
public static final String STATIC_CODEC = 'none'
public static final String OUT_CODEC = 'html'
public static final String TAGLIB_CODEC = 'none'
}
