<%@ page import="coursemanagement.Course" %>



<div class="fieldcontain ${hasErrors(bean: courseInstance, field: 'title', 'error')} required">
	<label for="title">
		<g:message code="course.title.label" default="Title" />
		<span class="required-indicator">*</span>
	</label>
	<g:textField name="title" required="" value="${courseInstance?.title}"/>

</div>

<div class="fieldcontain ${hasErrors(bean: courseInstance, field: 'creditHrs', 'error')} required">
	<label for="creditHrs">
		<g:message code="course.creditHrs.label" default="Credit Hrs" />
		<span class="required-indicator">*</span>
	</label>
	<g:field name="creditHrs" type="number" value="${courseInstance.creditHrs}" required=""/>

</div>

<div class="fieldcontain ${hasErrors(bean: courseInstance, field: 'description', 'error')} required">
	<label for="description">
		<g:message code="course.description.label" default="Description" />
		<span class="required-indicator">*</span>
	</label>
	<g:textField name="description" required="" value="${courseInstance?.description}"/>

</div>

