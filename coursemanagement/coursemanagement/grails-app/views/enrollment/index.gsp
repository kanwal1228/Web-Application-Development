
<%@ page import="coursemanagement.Enrollment" %>
<!DOCTYPE html>
<html>
	<head>
		<meta name="layout" content="mainpage">
		<g:set var="entityName" value="${message(code: 'enrollment.label', default: 'Enrollment')}" />
		<title><g:message code="default.list.label" args="[entityName]" /></title>
	</head>
	<body>
		<div class="nav" role="navigation">
			<ul>
				<li><a class="home" href="${createLink(uri: '/')}"><g:message code="default.home.label"/></a></li>
				<li><g:link class="create" action="create"><g:message code="default.new.label" args="[entityName]" /></g:link></li>
			</ul>
		</div>
		<div id="list-enrollment" class="content scaffold-list" role="main">
			<h1><g:message code="default.list.label" args="[entityName]" /></h1>
			<g:if test="${flash.message}">
				<div class="message" role="status">${flash.message}</div>
			</g:if>
			<table>
			<thead>
					<tr>
					
						<g:sortableColumn property="username" title="${message(code: 'enrollment.username.label', default: 'Username')}" />
					
						<g:sortableColumn property="course" title="${message(code: 'enrollment.course.label', default: 'Course')}" />
					
					</tr>
				</thead>
				<tbody>
				<g:each in="${enrollmentInstanceList}" status="i" var="enrollmentInstance">
				<g:if test="${fieldValue(bean: enrollmentInstance, field: "username")==session.user.name}">
					<tr class="${(i % 2) == 0 ? 'even' : 'odd'}">
					
						<td><g:link action="show" id="${enrollmentInstance.id}">${fieldValue(bean: enrollmentInstance, field: "username")}</g:link></td>
					
						<td>${fieldValue(bean: enrollmentInstance, field: "course")}</td>
					
					</tr>
					</g:if>
				</g:each>
				</tbody>
			</table>
			<div class="pagination">
				<g:paginate total="${enrollmentInstanceCount ?: 0}" />
			</div>
		</div>
	</body>
</html>
