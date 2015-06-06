
<%@ page import="coursemanagement.Enrollment" %>
<!DOCTYPE html>
<html>
	<head>
		<meta name="layout" content="mainpage">
		<g:set var="entityName" value="${message(code: 'enrollment.label', default: 'Enrollment')}" />
		<title><g:message code="default.show.label" args="[entityName]" /></title>
	</head>
	<body>
		<div class="nav" role="navigation">
			<ul>
				<li><a class="home" href="${createLink(uri: '/')}"><g:message code="default.home.label"/></a></li>
				<li><g:link class="list" action="index"><g:message code="default.list.label" args="[entityName]" /></g:link></li>
				<li><g:link class="create" action="create"><g:message code="default.new.label" args="[entityName]" /></g:link></li>
			</ul>
		</div>
		<div id="show-enrollment" class="content scaffold-show" role="main">
			<h1><g:message code="default.show.label" args="[entityName]" /></h1>
			<g:if test="${flash.message}">
			<div class="message" role="status">${flash.message}</div>
			</g:if>
			<ol class="property-list enrollment">
			
				<g:if test="${enrollmentInstance?.username}">
				<li class="fieldcontain">
					<span id="username-label" class="property-label"><g:message code="enrollment.username.label" default="Username" /></span>
					
						<span class="property-value" aria-labelledby="username-label"><g:fieldValue bean="${enrollmentInstance}" field="username"/></span>
					
				</li>
				</g:if>
			
				<g:if test="${enrollmentInstance?.course}">
				<li class="fieldcontain">
					<span id="course-label" class="property-label"><g:message code="enrollment.course.label" default="Course" /></span>
					
						<span class="property-value" aria-labelledby="course-label"><g:fieldValue bean="${enrollmentInstance}" field="course"/></span>
					
				</li>
				</g:if>
			
			</ol>
			<g:form url="[resource:enrollmentInstance, action:'delete']" method="DELETE">
				<fieldset class="buttons">
					<g:link class="edit" action="edit" resource="${enrollmentInstance}"><g:message code="default.button.edit.label" default="Edit" /></g:link>
					<g:actionSubmit class="delete" action="delete" value="${message(code: 'default.button.delete.label', default: 'Delete')}" onclick="return confirm('${message(code: 'default.button.delete.confirm.message', default: 'Are you sure?')}');" />
				</fieldset>
			</g:form>
		</div>
	</body>
</html>
