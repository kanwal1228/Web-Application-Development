<%@ page import="coursemanagement.Enrollment" %>



<div class="fieldcontain ${hasErrors(bean: enrollmentInstance, field: 'username', 'error')} required">
	<label for="username">
		<g:message code="enrollment.username.label" default="Username" />
		<span class="required-indicator">*</span>
	</label>
	<g:textField name="username" required="" value="${enrollmentInstance?.username ?: session.user.name}" />

</div>

<div class="fieldcontain ${hasErrors(bean: enrollmentInstance, field: 'course', 'error')} required">
	<label for="course">
		<g:message code="enrollment.course.label" default="Course" />
		<span class="required-indicator">*</span>
	</label>
	<g:textField name="course" required="" value="${enrollmentInstance?.course}"/>

</div>

