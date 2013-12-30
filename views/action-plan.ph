{% extends 'views/_layout.php' %}
{% block content %}
<div class="action-plan inner">
    <h1 class="action-plan_title page_title block">Action plan</h1>
    <ul class="action-plan_list inline-list">
        <li class="current">
            <a class="active" href="#">Ops</a>
        </li>
        <li>
            <a href="#">Marketing</a>
        </li>
        <li>
            <a href="#">Finance</a>
        </li>
        <li>
            <a href="#">Supply Chain</a>
        </li>
        <li>
            <a href="#">HR</a>
        </li>
        <li>
            <a href="#">Metro Systems / IT</a>
        </li>
        <li>
            <a href="#">Business Development</a>
        </li>
        <li>
            <a href="#">Misc</a>
        </li>
    </ul>
    <div class="action-plan_table_wrap">
        <table class="action-plan_table">
            <thead>
                <tr>
                    <th>Big Customer Issues</th>
                    <th>What is the OBJECTIVE?</th>
                    <th>WHO is responsible?</th>
                    <th>WHO SUPPORTS the work?</th>
                    <th>By WHEN?</th>
                    <th>What are the KPIs?</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td class="first-cell">
                    <ul>
                        <li>No delivery tool for field force, e.g. Ipad</li>
                    </ul>
                </td>
                <td>
                    <p>Information and Ordering support</p>
                </td>
                <td>
                    <p>FO</p>
                </td>
                <td>
                    <p>IT, Mkt</p>
                </td>
                <td>
                    <p>2014</p>
                </td>
                <td>
                    <p>Availability of software / hardware</p>
                </td>
            </tr>
            <tr>
                <td class="first-cell">
                    <ul>
                        <li>Loading & unloading help</li>
                        <li>Slow end control check</li>
                        <li>Cashier not facing customer</li>
                        <li>Accessibility at cashout</li>
                    </ul>
                </td>
                <td>
                    <p>In-store Operational Excellenc</p>
                </td>
                <td>
                    <p>Store Ops</p>
                </td>
                <td>
                    <p>HR, Security, IT</p>
                </td>
                <td>
                    <p>2013</p>
                </td>
                <td>
                    <p>Mystery Shopper, Queues, Productivity</p>
                </td>
            </tr>
            <tr>
                <td class="first-cell">
<!--                    <a class="arrow-right-blue" href="#">No delivery tool for field force, e.g. Ipad</a>-->
                </td>
                <td>
                    <p>In-store Operational Excellence</p>
                </td>
                <td>
                    <p>Store Ops</p>
                </td>
                <td>
                    <p>HR, Security, IT</p>
                </td>
                <td>
                    <p>2013</p>
                </td>
                <td>
                    <p>Mystery Shopper, Queues, Productivity</p>
                </td>
            </tr>
            <tr>
                <td class="first-cell" rowspan="3">
                    <ul>
                        <li>
                            <a href="#">Delivery Process</a></li>
                        <li>
                            <a href="#">SOE Usage</a>
                        </li>
                        <li>
                            <a href="#">Own transportation</a>
                        </li>
                        <li>
                            <a href="#">24h Ordering</a>
                        </li>
                    </ul>
                </td>
                <td>
                    <p>Optimization of current process</p>
                </td>
                <td rowspan="3">
                    <p>Out of Store Delivery Department</p>
                </td>
                <td>
                    <p>HR, Security, IT</p>
                </td>
                <td>
                    <p>2013</p>
                </td>
                <td>
                    <p>Mystery Shopper, Queues, Productivity</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Implementing new tools, ways of working</p>
                </td>
                <td>
                    <p>HR, Security, IT</p>
                </td>
                <td>
                    <p>2013</p>
                </td>
                <td>
                    <p>Mystery Shopper, Queues, Productivity</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Define service level criteria</p>
                </td>
                <td>
                    <p>HR, Security, IT</p>
                </td>
                <td>
                    <p>2013</p>
                </td>
                <td>
<!--                    <p>Mystery Shopper, Queues, Productivity</p>-->
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
{% endblock %}