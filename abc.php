<html>
<body>
<?php
<form class="navbar-search pull-right" action="{% url 'auth' %}" method="GET">
                  {% csrf_token %}
                   <div style="overflow: hidden; padding-right: .5em;">
                     <input type="submit" name="auth_method" value="sign up" size="30" style="float: right" />
                     <input type="submit" name="auth_method" value="sign in" size="30" style="float: right" />
                    </div>
                </form>
?>
</body>
</html>
