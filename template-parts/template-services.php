<?php

/**
 * Template Name: Services Page
 *
 * This is the template that displays full width page without sidebar
 *
 * @package undercustoms
 */
get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <div class="titlemon">
      <div class="title text-center">
        <h3 class="entry-title"> <?php the_title(); ?> </h3>
      </div>
    </div>

    <section class="common-section services-section bg-white">
      <div class="container py-5">
        <div class="lead">
          <?php
            // TO SHOW THE PAGE CONTENTS
            while ( have_posts() ) : the_post();
              the_content();
            endwhile;
            wp_reset_query();
          ?>
        </div>
      </div>
    </section>

    <section class="common-section services-section">
      <div class="container">

        <div class="row">
          <div class="col-md-3">
            <div class="sidebar">
              <aside id="tertiary" class="widget-area">
                <div class="widget custom-widget-subpages">
                  <h3 class="widget-title text-uppercase"> SERVICES </h3>
                  <ul class="child-list text-white">
                    <li> Management Consultancy </li>
                    <li> Certifications and Compliances </li>
                    <li> Licensing, Compliances & Laisioning </li>
                    <li> FEMA and WHO Nations Compliances </li>
                    <li> IPO for Companies and Compliances </li>
                    <li> Risk management and Insurance </li>
                  </ul>
                </div>
              </aside>
            </div>
          </div>
          <div class="col-md-9">
            <div class="row">

              <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <h5 class="card-title">Management Consultancy</h5>
                    <p class="card-text">The managerial skill is the path of success of every business organisation and here we work on products/services, manpower, polices, technology, financial planning and controls. In ordinary course of business ,the resources required like land, building and machinery are easily purchased from the market by paying the money but it is the skill of management which converts the promoter’s dreams into results. We offer a wide range of management consultancy services in various areas of business. </p>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <h5 class="card-title">Certifications and Compliances</h5>
                    <p class="card-text">In order to improve the reliability of the internal operations and to meet the customer requirements with overall performance which ultimately improve the staff motivation, commitment and understanding their responsibility towards organization, the requirement of ISO in every organization is must. Still further regular assessment performed by us help the company to continually use , monitor and improve the management system and processes. </p>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <h5 class="card-title">Licensing, Compliances and Laisioning</h5>
                    <p class="card-text">Every industry in today’s scenario has to obtain various licences, clearances and registrations with various government departments to meet the sectoral and regulatory compliance requirements such as Agmark, FSSAI, ISO, ESI, EPF, Mandi Board, Pollution control department, electricity board, Department of health, RTO, Petroleum companies, weight and measure department etc. The newly formed entities have to get the clearances in terms of approvals/ licenses before setting up the entity or before starting the operations thereof. </p>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <h5 class="card-title">FEMA and WHO Nations Compliances</h5>
                    <p class="card-text">The Foreign Exchange Management Act (FEMA) is law “to consolidate and amend the law relating to foreign exchange with the objective of facilitating external trade and payments and for promoting the orderly development and maintenance of foreign exchange market in India”. Whenever a Foreign Investor invests in India or an Indian Investor invest outside, he needs to comply with regulations framed under FEMA by Directorate of foreign trade and Reserve Bank of India. </p>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <h5 class="card-title">IPO for Companies and Compliances</h5>
                    <p class="card-text">Every company at the time of setup or during the normal operations require the funds in terms of private equity or initial public offerings from the capital market. In past, government opened the window for SME sector by cutting down the requirement of minimum level of the equity size from the market. Still further the companies require the resource for compliances to SEBI in ordinary course of business, execution of IPO in the capital market and compliances under the Companies Act,2013 for the activities under the various regulations. </p>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <h5 class="card-title">Risk management and Insurance</h5>
                    <p class="card-text">In every business the stake holders take the risk and provide the resources to the management for converting their dreams into reality. At the same time the insurance companies take up the coverage of risk by issuing the policy. However, the decision has to be made regarding what has to be insured, how much should be the quantum of insurance, from which company and at what premium the policy is to be taken so that the objective of the stake holders should be achieved. </p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- DISPLAY CALLTO SECTION -->
    <?php get_template_part('template-parts/content', 'callto-section'); ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
