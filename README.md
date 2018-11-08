Para Multiniveles del Menu, utilizar la siguiente macro en Avanzu/Resource/views/layout/ macro.twig.html
{% macro menu_item(item) %}
    {% import _self as macros %}
    {% if item.route or item.hasChildren %}
        <li id="{{ item.identifier }}"
            class=" {{ item.isActive ? 'active' : '' }} {{ item.hasChildren? 'treeview' : '' }}">
            <a href="{{ item.hasChildren ? '#': '/' in item.route ? item.route : path(item.route, item.routeArgs) }}">
                {% if item.icon %} <i class="{{ item.icon }}"></i> {% endif %}
                <span>{{ item.label }}</span>
                {% if item.badge %}
                    <small class="label pull-right bg-{{ item.badgeColor }}">{{ item.badge }}</small>
                {% endif %}
                {% if item.hasChildren %}<i class="fa fa-angle-left pull-right"></i>{% endif %}
            </a>

            {% if item.hasChildren %}
                <ul class="treeview-menu">
                    {% for child in item.children %}
                        {% if child.hasChildren %}
                            {{ macros.menu_item(child) }}
                        {% elseif child.route %}
                            <li class="{{ child.isActive ? 'active':'' }}" id="{{ child.identifier }}">
                                <a href="{{ '/' in child.route ? child.route : path(child.route, child.routeArgs) }}">
                                    <i class="{{ child.icon|default('fa fa-circle-o') }}"></i>
                                    {{ child.label }}
                                </a>
                            </li>
                        {% endif %}
                    {% endfor %}
                </ul>
            {% endif %}
        </li>
    {% else %}
        <li class="header">
            {{ item.label }}
            {% if item.badge %}
                <small class="label pull-right bg-{{ item.badgeColor }}">{{ item.badge }}</small>
            {% endif %}
        </li>
    {% endif %}
{% endmacro %}
