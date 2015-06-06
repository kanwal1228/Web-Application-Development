
<%@ page import="coursemanagement.Course" %>
<!DOCTYPE html>
<html>
	<head>
		<meta name="layout" content="mainpage">
		<g:set var="entityName" value="${message(code: 'course.label', default: 'Course')}" />
		<title><g:message code="default.list.label" args="[entityName]" /></title>
	</head>
	<body>
		<div class="nav" role="navigation">
			<ul>
				<li><a class="home" href="${createLink(uri: '/')}"><g:message code="default.home.label"/></a></li>
			</ul>
		</div>
		<div id="list-course" class="content scaffold-list" role="main">
			<h1><g:message code="default.list.label" args="[entityName]" /></h1>
			<g:if test="${flash.message}">
				<div class="message" role="status">${flash.message}</div>
			</g:if>
			<table>
			<thead>
					<tr>
					
						<g:sortableColumn property="title" title="${message(code: 'course.title.label', default: 'Title')}" />
					
						<g:sortableColumn property="creditHrs" title="${message(code: 'course.creditHrs.label', default: 'Credit Hrs')}" />
					
						<g:sortableColumn property="description" title="${message(code: 'course.description.label', default: 'Description')}" />
					
					</tr>
				</thead>
				<tbody>
				<g:each in="${courseInstanceList}" status="i" var="courseInstance">
					<tr class="${(i % 2) == 0 ? 'even' : 'odd'}">
						<td>${fieldValue(bean: courseInstance, field: "title")}</td>
					
						<td>${fieldValue(bean: courseInstance, field: "creditHrs")}</td>
					
						<td>${fieldValue(bean: courseInstance, field: "description")}</td>
					
					</tr>
				</g:each>
				</tbody>
			</table>
			<div class="pagination">
				<g:paginate total="${courseInstanceCount ?: 0}" />
			</div>
		</div>
	</body>
</html>
