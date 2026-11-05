<?php
function smarty_insert_team_menu()
{
    global $xoopsModule;
    $WebTeamID = $_SESSION['WebTeamID'] ?? '';
    $option = get_ceag_team_options('menu', $WebTeamID);

    $check1 = empty($WebTeamID) ? "selected='selected'" : "";
    $check2 = ($WebTeamID == '23') ? "selected='selected'" : "";

    $main = "<select onChange=\"location.href= this.value;\"  class='form-control'>
    <option value='home.php' style='color:#660000;font-weight:bold;' $check1>各領域小組及資源中心</option>
    <option value='master.php?TeamID=23' style='color:#3300CC;font-weight:bold;' $check2>臺南市國教輔導團【總團】</option>
    $option
    </select>";
    return $main;
}

if (!function_exists('get_ceag_team_options')) {
    //取得所有ceag_team分類選單的選項（模式=of_menu or menu,目前分類編號,目前分類的所屬編號）
    function get_ceag_team_options($mode = 'of_menu', $default_TeamID = "0", $default_ofTeamID = "0", $unselect_level = "", $start_search_sn = "0", $level = 0)
    {
        global $xoopsDB, $xoopsModule;
        $sql = "select TeamID,TeamName,TeamTitle,TeamKind from " . $xoopsDB->prefix("ceag_team") . " where ofTeamID='{$start_search_sn}' order by TeamSort";
        $result = $xoopsDB->query($sql) or redirect_header($_SERVER['PHP_SELF'], 3, $xoopsDB->error());

        $prefix = str_repeat("&nbsp;&nbsp;", $level);
        $level++;

        $unselect = explode(",", $unselect_level);

        $url = str_replace("master.php", "index.php", $_SERVER['PHP_SELF']);
        $url = str_replace("law.php", "index.php", $url);
        $url = str_replace("home.php", "index.php", $url);

        $main = "";
        while (list($TeamID, $TeamName, $TeamTitle, $TeamKind) = $xoopsDB->fetchRow($result)) {
            if ($TeamID == 23) {
                continue;
            }

            if ($mode == "of_menu") {
                $selected = ($TeamID == $default_ofTeamID) ? "selected=selected" : "";
                $selected .= ($TeamID == $default_TeamID) ? "disabled=disabled" : "";
                $selected .= (in_array($level, $unselect)) ? "disabled=disabled" : "";
            } else {
                $selected = ($TeamID == $default_TeamID) ? "selected=selected" : "";
                $selected .= (in_array($level, $unselect)) ? "disabled=disabled" : "";
            }

            $main .= ($TeamKind == 'kind') ? "<option $selected disabled='disabled' style='color:#000066;font-weight:bold;'>{$prefix}{$TeamName}</option>" : "<option  value='{$url}?TeamID={$TeamID}' $selected>{$prefix}{$TeamTitle}</option>";
            $main .= get_ceag_team_options($mode, $default_TeamID, $default_ofTeamID, $unselect_level, $TeamID, $level);

        }
        return $main;
    }
}
