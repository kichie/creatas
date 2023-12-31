<?php
/*
*Template Name: cooler
*/
$home_url = esc_url(home_url());
$theme_url = get_template_directory_uri();
get_header();
?>

<div class="p-cooler">
    <div class="p-cooler_wrap">
        <h2 class="pc">
            <label>◆◆◆</label>
            <p>ご希望の用途や広さを、下記の基準表の中から算定して下さい。</p>
            <label>◆◆◆</label>
        </h2>
        <h2 class="ta">
            <label>◆◆◆</label>
            <p>
                ご希望の用途や広さを、<br>
                下記の基準表の中から算定して下さい。
            </p>
            <label>◆◆◆</label>
        </h2>
        <h1>広さの目安(冷房時)</h1>
        <h3>あくまでも目安です。省エネには、1ランク上の馬力がおすすめです。</h3>

        <div class="p-cooler_wrap_table">
            <table class="p-cooler_wrap_table_wrap">
                <tbody class="p-cooler_wrap_table_wrap_tbody">
                    <tr class="p-cooler_wrap_table_wrap_tbody_tr">
                        <th class="p-cooler_wrap_table_wrap_tbody_tr_th">
                            <div class="p-cooler_wrap_table_wrap_tbody_tr_th_triangle">
                                <p>用途</p>
                                <p>馬力数</p>
                            </div>
                        </th>
                        <th class="p-cooler_wrap_table_wrap_tbody_tr_th">
                            <img src="<?php echo $theme_url ?>/images/cooler/restaurant.png">
                            <p class="pc">レストラン・食堂</p>
                            <p class="ta">レストラン<br>食堂</p>
                        </th>
                        <th class="p-cooler_wrap_table_wrap_tbody_tr_th">
                            <img src="<?php echo $theme_url ?>/images/cooler/cafe.png">
                            <p class="pc">喫茶店・理容院</p>
                            <p class="ta">喫茶店<br>理容院</p>
                        </th>
                        <th class="p-cooler_wrap_table_wrap_tbody_tr_th">
                            <img src="<?php echo $theme_url ?>/images/cooler/shop.png">
                            <p>一般商店</p>
                        </th>
                        <th class="p-cooler_wrap_table_wrap_tbody_tr_th">
                            <img src="<?php echo $theme_url ?>/images/cooler/office.png">
                            <p>事務所</p>
                        </th>
                    </tr>
                    <tr class="p-cooler_wrap_table_wrap_tbody_tr">
                        <td>
                            <label>
                                <h3>40</h3>
                                <p>系</p>
                            </label>
                            <span>1.5馬力相当</span>
                        </td>
                        <td>
                            <label>
                                <h3>3</h3>
                                <p>坪</p>
                            </label>
                            <span>11～12㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>4</h3>
                                <p>坪</p>
                            </label>
                            <span>13～14㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>5</h3>
                                <p>坪</p>
                            </label>
                            <span>17～19㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>7</h3>
                                <p>坪</p>
                            </label>
                            <span>24～26㎡</span>
                        </td>
                    </tr>
                    <tr class="p-cooler_wrap_table_wrap_tbody_tr">
                        <td>
                            <label>
                                <h3>45</h3>
                                <p>系</p>
                            </label>
                            <span>1.8馬力相当</span>
                        </td>
                        <td>
                            <label>
                                <h3>3.5</h3>
                                <p>坪</p>
                            </label>
                            <span>12～13㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>5</h3>
                                <p>坪</p>
                            </label>
                            <span>18～19㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>6</h3>
                                <p>坪</p>
                            </label>
                            <span>20～21㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>8</h3>
                                <p>坪</p>
                            </label>
                            <span>30～37㎡</span>
                        </td>
                    </tr>
                    <tr class="p-cooler_wrap_table_wrap_tbody_tr">
                        <td>
                            <label>
                                <h3>50</h3>
                                <p>系</p>
                            </label>
                            <span>2馬力相当</span>
                        </td>
                        <td>
                            <label>
                                <h3>4</h3>
                                <p>坪</p>
                            </label>
                            <span>13～14㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>5.5</h3>
                                <p>坪</p>
                            </label>
                            <span>18～19㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>6.5</h3>
                                <p>坪</p>
                            </label>
                            <span>22～23㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>9</h3>
                                <p>坪</p>
                            </label>
                            <span>30～37㎡</span>
                        </td>
                    </tr>
                    <tr class="p-cooler_wrap_table_wrap_tbody_tr">
                        <td>
                            <label>
                                <h3>56</h3>
                                <p>系</p>
                            </label>
                            <span>2.3馬力相当</span>
                        </td>
                        <td>
                            <label>
                                <h3>4.5</h3>
                                <p>坪</p>
                            </label>
                            <span>15～16㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>6</h3>
                                <p>坪</p>
                            </label>
                            <span>20～21㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>7</h3>
                                <p>坪</p>
                            </label>
                            <span>24～26㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>10</h3>
                                <p>坪</p>
                            </label>
                            <span>33～36㎡</span>
                        </td>
                    </tr>
                    <tr class="p-cooler_wrap_table_wrap_tbody_tr">
                        <td>
                            <label>
                                <h3>63</h3>
                                <p>系</p>
                            </label>
                            <span>2.5馬力相当</span>
                        </td>
                        <td>
                            <label>
                                <h3>5</h3>
                                <p>坪</p>
                            </label>
                            <span>17～19㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>6.5</h3>
                                <p>坪</p>
                            </label>
                            <span>22～23㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>8</h3>
                                <p>坪</p>
                            </label>
                            <span>27～34㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>11</h3>
                                <p>坪</p>
                            </label>
                            <span>37～46㎡</span>
                        </td>
                    </tr>
                    <tr class="p-cooler_wrap_table_wrap_tbody_tr">
                        <td>
                            <label>
                                <h3>80</h3>
                                <p>系</p>
                            </label>
                            <span>3馬力相当</span>
                        </td>
                        <td>
                            <label>
                                <h3>6.5</h3>
                                <p>坪</p>
                            </label>
                            <span>22～23㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>8.5</h3>
                                <p>坪</p>
                            </label>
                            <span>28～38㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>10.5</h3>
                                <p>坪</p>
                            </label>
                            <span>35～48㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>14</h3>
                                <p>坪</p>
                            </label>
                            <span>47～65㎡</span>
                        </td>
                    </tr>
                    <tr class="p-cooler_wrap_table_wrap_tbody_tr">
                        <td>
                            <label>
                                <h3>112</h3>
                                <p>系</p>
                            </label>
                            <span>4馬力相当</span>
                        </td>
                        <td>
                            <label>
                                <h3>9</h3>
                                <p>坪</p>
                            </label>
                            <span>30～37㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>12</h3>
                                <p>坪</p>
                            </label>
                            <span>39～47㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>15</h3>
                                <p>坪</p>
                            </label>
                            <span>49～60㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>20</h3>
                                <p>坪</p>
                            </label>
                            <span>66～81㎡</span>
                        </td>
                    </tr>
                    <tr class="p-cooler_wrap_table_wrap_tbody_tr">
                        <td>
                            <label>
                                <h3>140</h3>
                                <p>系</p>
                            </label>
                            <span>5馬力相当</span>
                        </td>
                        <td>
                            <label>
                                <h3>115</h3>
                                <p>坪</p>
                            </label>
                            <span>38～42㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>14.5</h3>
                                <p>坪</p>
                            </label>
                            <span>48～54㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>18.5</h3>
                                <p>坪</p>
                            </label>
                            <span>61～89㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>25</h3>
                                <p>坪</p>
                            </label>
                            <span>82～93㎡</span>
                        </td>
                    </tr>
                    <tr class="p-cooler_wrap_table_wrap_tbody_tr">
                        <td>
                            <label>
                                <h3>160</h3>
                                <p>系</p>
                            </label>
                            <span>6馬力相当</span>
                        </td>
                        <td>
                            <label>
                                <h3>13</h3>
                                <p>坪</p>
                            </label>
                            <span>43～70㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>16.5</h3>
                                <p>坪</p>
                            </label>
                            <span>55～70㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>21</h3>
                                <p>坪</p>
                            </label>
                            <span>90～103㎡</span>
                        </td>
                        <td>
                            <label>
                                <h3>28.5</h3>
                                <p>坪</p>
                            </label>
                            <span>94～139㎡</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="p-cooler_wrap_caution">
            <p class="pc">
                古くなると能力ダウンで冷えなくなり、追加で買いたして結果的に高くついてしまうこともあります。<br>
                ワンランクアップの省エネ運転がお薦めです。
            </p>
            <p class="ta">
                古くなると能力ダウンで冷えなくなり、<br>
                追加で買いたして結果的に高くついてしまうこともあります。<br>
                ワンランクアップの省エネ運転がお薦めです。
            </p>
        </div>
    </div>
</div>

<?php get_footer(); ?>