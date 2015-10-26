<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width"/>
</head>

<body>
	<table border="0" cellpadding="0" cellspacing="0">
		<tbody>
			<tr>
				<td>
					<p>So someone just gave us a testimonial. Here are their details:</p>
					
					<ul>
					    <li>Name: {{ $name }}</li>
					    <li>Email: {{ $email }}</li>
					    <li>Title: {{ $title }}</li>
					    <li>Company: {{ $company }}</li>
					</ul>
					
					<p>And here is what they have to say:</p>

					<div>{!! $body !!}</div>

					<p>Sincerely,<br/>
						Your Friendly Testimonial Form</p>
				</td>
			</tr>
		</tbody>
	</table>
</body>

</html>