<template>
    <BContainer fluid>
        <div id="two-column-menu"></div>
        <ul class="navbar-nav h-100" id="navbar-nav">
            <li class="nav-item">
                <Link href="/dashboard" class="nav-link menu-link"
                :class="{ 'active': $page.url === '/dashboard' || $page.url === '/'}">
                <i class="ri-apps-line"></i>
                <span class="fw-semibold fs-14" data-key="t-dashboards">Dashboard</span>
                </Link>
            </li>
            <!-- <tempalte v-if="$page.props.roles.includes('Technical Manager')">
                <li class="menu-title">
                    <i class="ri-more-fill" aria-expanded="false"></i>
                    <span data-key="t-menu">Technical Manager</span>
                </li>
            </tempalte>
            <tempalte v-else-if="$page.props.roles.includes('Lab Analyst')">
                <li class="menu-title">
                    <i class="ri-more-fill" aria-expanded="false"></i>
                    <span data-key="t-menu">Lab Analyst</span>
                </li>
            </tempalte>
            <tempalte v-else-if="$page.props.roles.includes('Releasing Officer')">
                <li class="menu-title">
                    <i class="ri-more-fill" aria-expanded="false"></i>
                    <span data-key="t-menu">Releasing Officer</span>
                </li>
            </tempalte> -->
            <tempalte v-if="['Customer Relation Officer','Releasing Officer','Lab Analyst','Technical Manager','Laboratory Head'].some(role => $page.props.roles.includes(role))">
                <li class="menu-title">
                    <i class="ri-more-fill" aria-expanded="false"></i>
                    <span data-key="t-menu">Laboratory</span>
                </li>
                <li class="nav-item">
                    <Link href="/customers" class="nav-link menu-link"
                    :class="{'active': $page.component.startsWith('Modules/Laboratory/Customers') }">
                    <i class="ri-team-fill"></i>
                    <span class="fw-semibold fs-14" data-key="t-dashboards">Customers</span>
                    </Link>
                </li>
                <li class="nav-item">
                    <Link href="/quotations" class="nav-link menu-link"
                    :class="{'active': $page.component.startsWith('Modules/Laboratory/Quotations') }">
                    <i class="ri-price-tag-3-fill"></i>
                    <span class="fw-semibold fs-14" data-key="t-dashboards">Quotations</span>
                    </Link>
                </li>
                <li class="nav-item">
                    <Link href="/tsrs" class="nav-link menu-link"
                    :class="{'active': $page.component.startsWith('Modules/Laboratory/Tsrs') }">
                    <i class="ri-hand-coin-fill"></i>
                    <span class="fw-semibold fs-14" data-key="t-dashboards">TS Requests</span>
                    </Link>
                </li>
                <li class="nav-item">
                    <Link href="/samples" class="nav-link menu-link"
                    :class="{'active': $page.component.startsWith('Modules/Laboratory/Sampleregister') }">
                    <i class="ri-todo-fill"></i>
                    <span class="fw-semibold fs-14" data-key="t-dashboards">Sample Register</span>
                    </Link>
                </li>
                <li class="nav-item">
                    <Link href="/testreports" class="nav-link menu-link"
                    :class="{'active': $page.component.startsWith('Modules/Laboratory/Testreports') }">
                    <i class="ri-file-paper-2-fill"></i>
                    <span class="fw-semibold fs-14" data-key="t-dashboards">Test Reports</span>
                    </Link>
                </li>
            </tempalte>
            <tempalte v-else-if="$page.props.roles.includes('Laboratory Aide')">
                <li class="menu-title">
                    <i class="ri-more-fill" aria-expanded="false"></i>
                    <span data-key="t-menu">Laboratory Aide</span>
                </li>
            </tempalte>
            <tempalte v-else-if="$page.props.roles.includes('Accountant')">
                <li class="menu-title">
                    <i class="ri-more-fill" aria-expanded="false"></i>
                    <span data-key="t-menu">Accountant</span>
                </li>
                <li class="nav-item">
                    <Link href="/orderofpayments" class="nav-link menu-link"
                    :class="{'active': $page.component.startsWith('Modules/Finance/Accounting/OrderPayments') }">
                    <i class="ri-hand-coin-fill"></i>
                    <span class="fw-semibold fs-14" data-key="t-dashboards">Order of Payments</span>
                    </Link>
                </li>
            </tempalte>
            <tempalte v-else-if="$page.props.roles.includes('Cashier')">
                <li class="menu-title">
                    <i class="ri-more-fill" aria-expanded="false"></i>
                    <span data-key="t-menu">Cashier</span>
                </li>
                <li class="nav-item">
                    <Link href="/receipts" class="nav-link menu-link"
                    :class="{'active': $page.component.startsWith('Modules/Finance/Cashiering/Receipts') }">
                    <i class="ri-price-tag-2-fill"></i>
                    <span class="fw-semibold fs-14" data-key="t-dashboards">Receipts</span>
                    </Link>
                </li>
                <li class="nav-item">
                    <Link href="/nonlabreceipts" class="nav-link menu-link"
                    :class="{'active': $page.component.startsWith('Modules/Finance/Cashiering/Nonlab') }">
                    <i class="ri-price-tag-2-line"></i>
                    <span class="fw-semibold fs-14" data-key="t-dashboards">Other Receipts</span>
                    </Link>
                </li>
                <li class="nav-item">
                    <Link href="/orseries" class="nav-link menu-link"
                    :class="{'active': $page.component.startsWith('Modules/Finance/Cashiering/Orseries') }">
                    <i class="ri-coupon-line"></i>
                    <span class="fw-semibold fs-14" data-key="t-dashboards">OR Series</span>
                    </Link>
                </li>
                <li class="nav-item">
                    <Link href="/names" class="nav-link menu-link"
                    :class="{'active': $page.component.startsWith('Modules/Finance/Cashiering/Names') }">
                    <i class="ri-account-circle-fill"></i>
                    <span class="fw-semibold fs-14" data-key="t-dashboards">Names</span>
                    </Link>
                </li>
            </tempalte>
            <li class="menu-title">
                <i class="ri-more-fill" aria-expanded="false"></i>
                <span data-key="t-menu">Other Modules</span>
            </li>
            <li class="nav-item">
                <Link href="/calendars" class="nav-link menu-link"
                :class="{'active': $page.component.startsWith('Modules/Others/Calendars') }">
                <i class="ri-calendar-fill"></i>
                <span class="fw-semibold fs-14" data-key="t-dashboards">Calendar</span>
                </Link>
            </li>
            <li class="nav-item">
                <Link href="/equipments" class="nav-link menu-link"
                :class="{'active': $page.component.startsWith('Modules/Others/Equipments') }">
                <i class="ri-tools-fill"></i>
                <span class="fw-semibold fs-14" data-key="t-dashboards">Equipments</span>
                </Link>
            </li> 
            <!-- <li class="nav-item">
                <Link href="/services" class="nav-link menu-link"
                :class="{'active': $page.component.startsWith('Modules/Laboratory/Services') }">
                <i class="ri-archive-fill"></i>
                <span class="fw-semibold fs-14" data-key="t-dashboards">Inventory</span>
                </Link>
            </li>  -->
            <tempalte v-if="['Cashier','Accountant','Customer Relation Officer','Releasing Officer','Lab Analyst','Technical Manager','Laboratory Head'].some(role => $page.props.roles.includes(role))">
                <li class="menu-title">
                    <i class="ri-more-fill" aria-expanded="false"></i>
                    <span data-key="t-menu">Others</span>
                </li>
                <li class="nav-item">
                    <Link href="/reports" class="nav-link menu-link"
                    :class="{'active': $page.component.startsWith('Modules/Reports') }">
                    <i class="ri-file-text-fill"></i>
                    <span class="fw-semibold fs-14" data-key="t-dashboards">Reports</span>
                    </Link>
                </li>
                <li class="nav-item">
                    <Link class="nav-link menu-link"
                    :class="{'active': $page.component.startsWith('Modules/Insights') }">
                    <i class="ri-line-chart-fill"></i>
                    <span class="fw-semibold fs-14" data-key="t-dashboards">Insights</span>
                    </Link>
                    <div class="collapse menu-dropdown" id="gad">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <Link class="nav-link" :class="{'active': $page.url === '/insights/gad' }" href="/insights/gad">GAD Corner</Link>
                            </li>
                            <li class="nav-item">
                                <Link class="nav-link" :class="{'active': $page.url === '/insights/top' }" href="/insights/top">Performance Summary</Link>
                            </li>
                            <li class="nav-item">
                                <Link class="nav-link" :class="{'active': $page.url === '/insights/payments' }" href="/insights/payments">Payments</Link>
                            </li>
                            <li class="nav-item">
                                <Link class="nav-link" :class="{'active': $page.url === '/insights/customers' }" href="/insights/customers">Customers</Link>
                            </li>
                            <li class="nav-item">
                                <Link class="nav-link" :class="{'active': $page.url === '/insights/laboratories' }" href="/insights/laboratories">Laboratories</Link>
                            </li>
                        </ul>
                    </div>
                </li>
            </tempalte>
            <tempalte v-if="$page.props.roles.includes('Administrator')">
                <li class="menu-title">
                    <i class="ri-more-fill" aria-expanded="false"></i>
                    <span data-key="t-menu">Laboratory Modules</span>
                </li>
                <li class="nav-item">
                    <Link href="/services" class="nav-link menu-link"
                    :class="{'active': $page.component.startsWith('Modules/Laboratory/Services') }">
                    <i class="ri-flask-fill"></i>
                    <span class="fw-semibold fs-14" data-key="t-dashboards">Test Services</span>
                    </Link>
                </li>
                <li class="menu-title">
                    <i class="ri-more-fill" aria-expanded="false"></i>
                    <span data-key="t-menu">Executive</span>
                </li>
                <li class="nav-item">
                    <Link href="/users" class="nav-link menu-link"
                    :class="{'active': $page.component.startsWith('Modules/Executive/Users') }">
                    <i class="ri-team-fill"></i>
                    <span class="fw-semibold fs-14" data-key="t-dashboards">User Management</span>
                    </Link>
                </li>
                <li class="nav-item">
                    <Link href="/agencies" class="nav-link menu-link"
                    :class="{'active': $page.component.startsWith('Modules/Executive/Agencies') }">
                    <i class="ri-government-fill"></i>
                    <span class="fw-semibold fs-14" data-key="t-dashboards">Agency Management</span>
                    </Link>
                </li>
                <li class="menu-title">
                    <i class="ri-more-fill" aria-expanded="false"></i>
                    <span data-key="t-menu">Others</span>
                </li>
                <li class="nav-item">
                    <Link href="/patients" class="nav-link menu-link"
                    :class="{'active': $page.component.startsWith('Patients') }">
                    <i class="ri-shield-check-line"></i>
                    <span class="fw-semibold fs-14" data-key="t-dashboards">Role Management</span>
                    </Link>
                </li>
                <li class="nav-item">
                    <Link href="/patients" class="nav-link menu-link"
                    :class="{'active': $page.component.startsWith('Patients') }">
                    <i class="ri-time-fill"></i>
                    <span class="fw-semibold fs-14" data-key="t-dashboards">Authentication Logs</span>
                    </Link>
                </li>
                <li class="nav-item">
                    <Link href="/patients" class="nav-link menu-link"
                    :class="{'active': $page.component.startsWith('Patients') }">
                    <i class="ri-history-line"></i>
                    <span class="fw-semibold fs-14" data-key="t-dashboards">Activity Logs</span>
                    </Link>
                </li>
                <li class="nav-item">
                    <Link href="/patients" class="nav-link menu-link"
                    :class="{'active': $page.component.startsWith('Patients') }">
                    <i class="ri-server-line"></i>
                    <span class="fw-semibold fs-14" data-key="t-dashboards">Backup and Restore</span>
                    </Link>
                </li>
            </tempalte>
        </ul>
        
    </BContainer>
</template>
<script>
    import {
        layoutComputed
    } from "@/Shared/State/helpers";
    import simplebar from "simplebar-vue";

    export default {
        components: {
            simplebar,
        },
        data() {
            return {
                currentUrl: window.location.origin,
                menus: [],
                settings: {
                    minScrollbarLength: 60,
                },
            };
        },
        computed: {
            ...layoutComputed,
            layoutType: {
                get() {
                    return this.$store ? this.$store.state.layout.layoutType : {} || {};
                },
            },
            filteredFinance() {
                const cashier = ['Dashboard', 'Receipts', 'Deposits', 'Collection Type', 'OR Series', 'Names',
                    'Reports'];
                const accountant = ['Dashboard', 'Order of Payment', 'Collection Type', 'Reports'];

                const role = this.$page.props.user.data.assigned_role;
                const menus = this.$page.props.menus.finance;

                const isMenuNameInArray = (menuName, nameArray) =>
                    nameArray.some(name => menuName.toLowerCase().includes(name.toLowerCase()));

                if (role === 'Cashier') {
                    return menus.filter(menu => isMenuNameInArray(menu.main.name, cashier));
                } else if (role === 'Accountant') {
                    return menus.filter(menu => isMenuNameInArray(menu.main.name, accountant));
                }

                return [];
            }
        },
        mounted() {
            this.initActiveMenu();
            this.onRoutechange();
            // this.fetch();
            if (document.querySelectorAll(".navbar-nav .collapse")) {
                let collapses = document.querySelectorAll(".navbar-nav .collapse");

                collapses.forEach((collapse) => {
                    // Hide sibling collapses on `show.bs.collapse`
                    collapse.addEventListener("show.bs.collapse", (e) => {
                        e.stopPropagation();
                        let closestCollapse = collapse.parentElement.closest(".collapse");
                        if (closestCollapse) {
                            let siblingCollapses =
                                closestCollapse.querySelectorAll(".collapse");
                            siblingCollapses.forEach((siblingCollapse) => {
                                if (siblingCollapse.classList.contains("show")) {
                                    siblingCollapse.classList.remove("show");
                                    siblingCollapse.parentElement.firstChild.setAttribute(
                                        "aria-expanded", "false");
                                }
                            });
                        } else {
                            let getSiblings = (elem) => {
                                // Setup siblings array and get the first sibling
                                let siblings = [];
                                let sibling = elem.parentNode.firstChild;
                                // Loop through each sibling and push to the array
                                while (sibling) {
                                    if (sibling.nodeType === 1 && sibling !== elem) {
                                        siblings.push(sibling);
                                    }
                                    sibling = sibling.nextSibling;
                                }
                                return siblings;
                            };
                            let siblings = getSiblings(collapse.parentElement);
                            siblings.forEach((item) => {
                                if (item.childNodes.length > 2) {
                                    item.firstElementChild.setAttribute("aria-expanded",
                                        "false");
                                    item.firstElementChild.classList.remove("active");
                                }
                                let ids = item.querySelectorAll("*[id]");
                                ids.forEach((item1) => {
                                    item1.classList.remove("show");
                                    item1.parentElement.firstChild.setAttribute(
                                        "aria-expanded", "false");
                                    item1.parentElement.firstChild.classList.remove(
                                        "active");
                                    if (item1.childNodes.length > 2) {
                                        let val = item1.querySelectorAll("ul li a");

                                        val.forEach((subitem) => {
                                            if (subitem.hasAttribute(
                                                    "aria-expanded"))
                                                subitem.setAttribute(
                                                    "aria-expanded", "false");
                                        });
                                    }
                                });
                            });
                        }
                    });

                    // Hide nested collapses on `hide.bs.collapse`
                    collapse.addEventListener("hide.bs.collapse", (e) => {
                        e.stopPropagation();
                        let childCollapses = collapse.querySelectorAll(".collapse");
                        childCollapses.forEach((childCollapse) => {
                            let childCollapseInstance = childCollapse;
                            childCollapseInstance.classList.remove("show");
                            childCollapseInstance.parentElement.firstChild.setAttribute(
                                "aria-expanded", "false");
                        });
                    });
                });
            }
        },

        methods: {
            checkUrl() {
                const path = window.location.pathname;
                return path.split('/')[1] || null;
            },
            onRoutechange() {
                // this.initActiveMenu();
                setTimeout(() => {
                    var currentPath = window.location.pathname;
                    if (document.querySelector("#navbar-nav")) {
                        let currentPosition = document.querySelector("#navbar-nav").querySelector('[href="' +
                            currentPath + '"]') ?.offsetTop;
                        if (currentPosition > document.documentElement.clientHeight) {
                            document.querySelector("#scrollbar .simplebar-content-wrapper") ? document
                                .querySelector("#scrollbar .simplebar-content-wrapper").scrollTop =
                                currentPosition + 300 : '';
                        }
                    }
                }, 500);
            },

            initActiveMenu() {
                setTimeout(() => {
                    var currentPath = window.location.pathname;
                    if (document.querySelector("#navbar-nav")) {
                        let a = document.querySelector("#navbar-nav").querySelector('[href="' + currentPath +
                            '"]');
                        if (a) {
                            a.classList.add("active");
                            let parentCollapseDiv = a.closest(".collapse.menu-dropdown");
                            if (parentCollapseDiv) {
                                parentCollapseDiv.classList.add("show");
                                parentCollapseDiv.parentElement.children[0].classList.add("active");
                                parentCollapseDiv.parentElement.children[0].setAttribute("aria-expanded",
                                    "true");
                                if (parentCollapseDiv.parentElement.closest(".collapse.menu-dropdown")) {
                                    parentCollapseDiv.parentElement.closest(".collapse").classList.add("show");
                                    if (parentCollapseDiv.parentElement.closest(".collapse")
                                        .previousElementSibling)
                                        parentCollapseDiv.parentElement.closest(".collapse")
                                        .previousElementSibling.classList.add("active");
                                    const grandparent = parentCollapseDiv.parentElement.closest(".collapse")
                                        .previousElementSibling.parentElement.closest(".collapse");
                                    if (grandparent && grandparent && grandparent.previousElementSibling) {
                                        grandparent.previousElementSibling.classList.add("active");
                                        grandparent.classList.add("show");
                                    }
                                }
                            }
                        }
                    }
                }, 0);
            },
        },
    };

</script>
